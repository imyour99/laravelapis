<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPassword;
use App\Models\User;
use App\Traits\GlobalResponseTrait;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Str;

class AuthController extends Controller
{

    use GlobalResponseTrait;

    /**
     * @OA\Post(
     *      path="/api/v1/login",
     *      operationId="login",
     *      tags={"User"},
     *      summary="Login User",
     *      description="Returns User data and auth token",
     *
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"email", "password"},
     *               @OA\Property(property="email", type="email"),
     *               @OA\Property(property="password",type="text"),
     *
     *            ),
     *        ),
     *    ),
     * )
     *
     * Login User and return auth token and user data.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     * @author Ali Shaikh <ali.shaikh@itfaq.cloud>
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {

            $validator = \Validator::make($request->all(), [
                'email' => 'required|max:255|email',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->returnResponseError(422, 'Parameters are not valid.', $validator->errors()->all());
            }

            if (auth()->attempt($credentials)) {

                $data = [];
                $data['access_token'] = auth()->user()->createToken(config('app.name'))->accessToken;
                $data['token_type'] = 'Bearer';
                $data['user'] = auth()->user()->load(['collaboration']);
//                $data['user'] = auth()->user()->load(['collaboration', 'collaboration.contract.teamLeader']);

                $response = $this->returnResponse('User logged in successfully!', $data, 200);

            } else {


                $response = $this->returnResponseError(401, 'Invalid credentials.');

            }

            return $response;


        } catch (\Exception $e) {

            log::error($e->getMessage());

            return $this->returnResponseError(500, 'Internal Server Error', [$e->getMessage()]);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @author Ali Shaikh <ali.shaikh@itfaq.cloud>
     * @OA\Post(
     *      path="/api/v1/forgot-password",
     *      operationId="forgot-password",
     *      tags={"User"},
     *      summary="Forgot Password",
     *      description="Send an email to user with reset password link",
     *
     *     @OA\Response(
     *          response=200,
     *          description="Success"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request",
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Not Found"
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Content"
     *      ),
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"email"},
     *               @OA\Property(property="email", type="email"),
     *
     *            ),
     *        ),
     *    ),
     * )
     */
    public function forgotPassword(Request $request)
    {
        $email = $request->only('email');

        $validator = Validator::make($email, [
            'email' => 'required|string|email',
        ]);

        if ($validator->fails()) {
            return $this->returnResponseError(422, 'Parameters are not valid.', $validator->errors()->all());
        }

        if (User::where('email', $email)->doesntExist()) {
            return $this->returnResponseError(404, 'There is no account linked with the email address entered!');
        }

        $response = Password::sendResetLink($email);

        $emailSent = $response == Password::RESET_LINK_SENT;

        if ($emailSent) {
            $response = $this->returnResponse('Please Check your email!', [], 200);
        } else {
            $response = $this->returnResponseError(400, 'Bad Request', (array)'Email is not correct!');
        }

        return $response;

    }

    /**
     * Generate a password reset URL for the mobile application.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function genResetMobileURL()
    {
        $currentURL = URL::full();

        $string = explode('?', $currentURL);
        $string2 = explode('&', $string[1]);

        $email = str_replace('=', '', $string2[1]);
        $token = str_replace('=', '', $string2[0]);

        return Redirect::to('imc://imcapp?reset=' . $token . '&email=' . $email);
    }

    /**
     *
     * Reset the user password.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.cloud>
     *
     * @OA\Post(
     *      path="/api/v1/reset-password",
     *      operationId="reset-password",
     *      tags={"User"},
     *      summary="Reset Password",
     *      description="Reset Password",
     *
     *     @OA\Response(
     *          response=200,
     *          description="Success"
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request",
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Content"
     *      ),
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"token","email","password","password_confirmation"},
     *               @OA\Property(property="token", type="text"),
     *               @OA\Property(property="email", type="email"),
     *               @OA\Property(property="password",type="text"),
     *               @OA\Property(property="password_confirmation", type="text"),
     *            ),
     *        ),
     *    ),
     * )
     */
    public function resetPassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return $this->returnResponseError(422, 'Parameters are not valid.', $validator->errors()->all());
        }

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return $this->returnResponse('Password reset successfully!', [], 200);
        } else {
            return $this->returnResponseError(400, 'Bad Request', (array)'Password reset failed!');
        }

    }

    /**
     * @OA\Post(
     *      path="/api/v1/logout",
     *      operationId="logout",
     *      tags={"User"},
     *      summary="Logout",
     *      security={{"bearer_token":{}}},
     *
     *     @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent()
     *    ),
     * )
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return $this->returnResponse('Logout successfully!', [], 200);
    }

}

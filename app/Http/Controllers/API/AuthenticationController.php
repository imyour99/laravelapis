<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class AuthenticationController extends Controller
{


    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => 'required|string',
            'email' => 'required|string|email',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $user = User::where('email', $request->email)->first();


        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(
                ['status' => "Error", 'msg' => 'Credentials does not match!'
                ],
                Response::HTTP_UNAUTHORIZED);
        }
        else
        {
            // if ($user->email_verified_at == null)
            // {
            //     return response()->json(
            //         [
            //             'status' => 'Success',
            //             'message' => 'The email is not verified',
            //         ],
            //         Response::HTTP_NOT_ACCEPTABLE
            //     );
            // }
            // else
            if($user->status == 'inactive')
            {
                return response()->json(
                    [
                        'status' => 'Success',
                        'message' => 'User is not activated by super admin',
                    ],
                    Response::HTTP_NOT_ACCEPTABLE
                );
            }
            else
            {
                $token = $user->createToken('AuthToken')->accessToken;
                $data = [
                    'auth_token' => $token,
                    'user' => $user,
                ];
                return response(
                    [
                        'status' => 'Success',
                        'message' => "User logged in successfully",
                        'data' => [$data]
                    ],
                    Response::HTTP_OK);
            }
        }
    }




    // Forgot Password API Controller Method
    public function forgotPassword(Request $request)
    {

        $email = $request->email;
        $users = DB::table('users')->where('email',$email)->where('status','1')->first();
        if($users)
        {
            $input = $request->only('email');
            $validator = Validator::make($input, [
                'email' => "string|email"
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors());
            }
            $response = Password::sendResetLink($input);

            $message = $response == Password::RESET_LINK_SENT ? true : false;


            if($message){

                $success['message'] =  'Password reset link sent';
                return response()->json(['success'=>$success], Response::HTTP_OK);

            }
            else
            {
                $error['message'] =  'There is no account linked with the email id entered';
                return response()->json(['error' => $error], 401);

            }


        }
        else
        {
            $error['message'] =  'Opps !! You are not active please contact administrator to obtain permission';
            return response()->json(['error' => $error], 409);
        }
    }



    public function reset_view()
    {
        $currentURL = URL::full();

        $string = explode('?',$currentURL);
        $string2 = explode('&',$string[1]);

        $email = str_replace('=','',$string2[1]);
        $token = str_replace('=','',$string2[0]);

        return Redirect::to('imc://imcapp?reset='.$token.'&email='.$email);
    }

    // Reset Forgot password API Controller Method
    public function reset(Request $request)
    {

            $request->validate([
                'token' => 'required',
                'email' => 'required|email',
                'password'         => 'required',
                'password_confirmation' => 'required|same:password',
                // 'password' => ['required', 'confirmed', RulesPassword::defaults()],
            ]);


            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user) use ($request) {
                    $user->forceFill([
                        'password' => Hash::make($request->password),
                        'remember_token' => Str::random(60),
                    ])->save();

                    $user->tokens()->delete();

                    event(new PasswordReset($user));
                }
            );

            if ($status == Password::PASSWORD_RESET)
            {
                $success['message'] =  'Password reset successfully';
                return response()->json(['success'=>$success], Response::HTTP_OK);
            }


            $error['message'] =  'Registered mail id wrong or else token is invalid';
            return response()->json(['error' => $error], 401);
            // return response([
            //     'message'=> __($status)
            // ], 500);
    }

    public function logout(Request $request)
    {
        $user = Auth::user()->token();
        $user->revoke();
        return response()->json(
            [
                'status' => 'Success',
                'message' => 'User logged out successfully!!',

            ],
            Response::HTTP_OK
        );
    }

}

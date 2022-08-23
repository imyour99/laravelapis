<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Collaboration;
use App\Notifications\adminSendPasswordLink;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function admin_login(Request $request)
    {

        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'role_id' =>\UserHelper::$ROLE_SUPERADMIN))) {
            return Redirect::back()->with('success_alert', 5);
        } else {
            return redirect()->back()->with('error', 'Incorrect email address and / or password.');
        }
    }

    public function EmailVerify(Request $request)
    {
        //dd($request->all());
        $loginEmail = $request->loginEmail;
        $UserID = $request->UserID;
        $VerifyEmail = user::where(['email' => $loginEmail, 'id' => $UserID])->first();
        if (!empty($VerifyEmail)) {
            //$request->session()->put(['userid' => $login->id]);
            //return Redirect::to('dashboard');
            return 1;
        } else {
            return back()->with('error', 'Email not  Verify');
        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function register(Request $request)
    {
        return view('Admin/register');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('');
    }

    public function signup(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = $request->all();

        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('Registration Success');
    }

    public function recover_pw_post(Request $request)
    {

        $request->validate(['email' => ['required', 'email']]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $token = Str::random(60);
            $password_reset_user = DB::table('password_resets')
                ->where('email', $request->email)
                ->first();
            if ($password_reset_user) {
                $token_saved = DB::table('password_resets')
                    ->where('email', $password_reset_user->email)
                    ->update([
                        'token' => $token
                    ]);
            } else {
                $token_saved = DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => $token, 'created_at' => date('Y-m-d H:i:s')
                ]);
            }
            if ($token_saved) {
                $user->notify(new adminSendPasswordLink($user, $token));
                return back()->with('success', 'Reset link is sent successfully, please check your email.');
            } else {
                return back()->with('error', 'This email does not exist.!');
            }
        } else {
            return back()->with('error', 'Sorry.!! this email id does not exist in our records.!');
        }
    }

    public function password_reset($token)
    {
        $user = DB::table('password_resets')->where('token', $token)->first();

        $email = $user->email;
        $user_info = DB::table('users')->where('email', $email)->first();
        // $firstname = $user_info->firstname;
        // $lastname = $user_info->lastname;
        return view('auth.password_reset', compact('email'));
    }


    public function password_reset_post(Request $request)
    {

        $email = $request->email;
        $user = DB::table('users')->where('email', $email)->first();

        if ($request->password == $request->password_confirmation) {
            if ($user) {
                $password_updated = DB::table('users')
                    ->where('email', $user->email)
                    ->update(['password' => Hash::make($request->password)]);

                if ($password_updated) {
                    return redirect('')->with('success', "Password is changed successfully");
                } else {

                    return redirect('')->with('error', "There is an error while changing the password please try again later.!");
                }
            }
        } else {
            return back()->with('error', 'Password does not match with confirm password');
        }
    }

    public function AdministrationList()
    {
        $users = DB::table('users')->orderBy('id','DESC')->get();
        //        $collaborateurs = Collaboration::all();
        //        dd($collaborateurs);
        //return view(['data' => $quryGettingClint]);
        return view('administration.administrationList', compact('users'));
        //return view('AdministrationList');
    }

    public function user_list_search(Request $request)
    {

        $search_input = $request->search_input;

        $users = DB::table('users')
                ->where('name','like',"%$search_input%")
                ->orWhere('email','like',"%$search_input%")
                ->orWhere('telephone','like',"%$search_input%")
                ->orWhere('id','like',"%$search_input%")
                ->orderBy('id','DESC')->get();

        if ($request->ajax()) {
            return \Response::json(\View::make('administration.userList_ajax', compact('users'))->render());
        }


        return view('administration.administrationList', compact('users'));
    }


    public function administrationList_create(Request $request)
    {


        $nom = $request->nom;
        $email = $request->email;
        $mot_de_passe = Hash::make($request->mot_de_passe);
        $confirmer_mot_de_passe = Hash::make($request->confirmer_mot_de_passe);
        $role = $request->role;
        $telephone = $request->telephone;


        $User = new User();

        $User->name = $nom;
        $User->email = $email;
        $User->password = $mot_de_passe;
        $User->role_id = $role;
        $User->telephone = $telephone;

        $Users = $User->save();
        return Redirect::back()->with('success', 'Utilisateur ajouté avec succès');

    }



    //    function dashboard(Request $request) {
    //        if (Session::get('id')) {
    //            return view('Admin/dashboard');
    //        } else {
    //            return view('Admin/loginpage');
    //        }
    //    }




}

<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use session;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\UserDetail;
use App\Country;
use App\Developer;
use App\DeveloperSocial;
use App\DeveloperAccount;
use App\City;

use Auth;
use App\Mail\verifyEmail;
use Illuminate\Auth\Events\Registered;
use App\UserTemp;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $redirectTo = '/profile';

    //protected $redirectTo = '/profile';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('web');
     }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
         $users = UserTemp::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
//            'user_type' => 1,
            'verifyToken' => Str::random(40)

        ]);

         $thisUser = UserTemp::find($users->id);
         $this->sendEmail($thisUser);

//            auth()->login($users);
//
//
//            $Userdetail = new UserDetail();
//            $Userdetail->user_id = Auth::user()->id;
//            $Userdetail->save();
//
//            $country = new Country();
//            $country->user_id = Auth::user()->id;
//            $country->save();
//
//            $city = new City();
//            $city->user_id = Auth::user()->id;
//            $city->save();
//
//            $developer = new Developer();
//            $developer->user_id = Auth::user()->id;
//            $developer->save();
//
//            $socialsdetails = new DeveloperSocial();
//            $socialsdetails->user_id = Auth::user()->id;
//            $socialsdetails->save();
//
//            $developeraccount = new DeveloperAccount();
//            $developeraccount->user_id = Auth::user()->id;
//            $developeraccount->save();

//            return $users;
//            return redirect('/profile');

    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect(route('verifyEmailFirst'));
    }

//    public function register(Request $request)
//    {
//        $input = $request->all();
//        $validator = $this->validator($input);
//
//        if($validator->passes()) {
//
//        }
//
//        return redirect(route('verifyEmailFirst'));
//
////        return $this->registered($request, $user)
//   }

    public function sendEmail($thisUser){
        Mail::to($thisUser['email'])->queue(new verifyEmail($thisUser));
    }

    public function verifyEmailFirst(){
        return view('email.verifyEmailFirst');
//        return redirect('login')->with('status', 'Please verify email');
    }

    public function sendEmailDone($email, $verifyToken){
        $users_temp = UserTemp::where(['email' => $email, 'verifyToken' => $verifyToken])->first();

        if (!is_null($users_temp)){

            $users = User::create([
                'firstname' => $users_temp->firstname,
                'lastname' => $users_temp->lastname,
                'email' => $users_temp->email,
                'password' => $users_temp->password,
//                'user_type' => $users_temp->user_type,
                'verifyToken' => Str::random(40)
            ]);

            auth()->login($users);

            $Userdetail = new UserDetail();
            $Userdetail->user_id = Auth::user()->id;
            $Userdetail->save();

            $country = new Country();
            $country->user_id = Auth::user()->id;
            $country->save();

            $city = new City();
            $city->user_id = Auth::user()->id;
            $city->save();

            $developer = new Developer();
            $developer->user_id = Auth::user()->id;
            $developer->save();

            $socialsdetails = new DeveloperSocial();
            $socialsdetails->user_id = Auth::user()->id;
            $socialsdetails->save();

            $developeraccount = new DeveloperAccount();
            $developeraccount->user_id = Auth::user()->id;
            $developeraccount->save();

            //return User::where(['email' => $email, 'verifyToken' => $verifyToken])->update(['status' => '1', 'verifyToken' => NULL]);
           $users->update(['status' => '1', 'verifyToken' => NULL]);
           return redirect('/profile');
        } else {
            return "User not found";
        }

    }
}

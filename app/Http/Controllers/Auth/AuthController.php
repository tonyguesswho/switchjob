<?php

namespace App\Http\Controllers\Auth;

use App\City;
use App\Country;
use App\DeveloperAccount;
use App\DeveloperSocial;
use App\UserDetail;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Session;
use App\SocialAccountService;
use App\Developer;
use \Illuminate\Contracts\Auth\Authenticatable;

class AuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback(SocialAccountService $service, $provider)
    {
        $user = $service->createOrGetUser(Socialite::driver($provider)->user(), $provider);

        $profile = Developer::where('user_id', $user->id)->first();

        if ($profile){
            auth()->login($user);
            return redirect()->to('dashboard');
        }

        auth()->login($user);

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

        return redirect()->to('/profile');

//        $profile = Developer::where('user_id', $user->id)->first();


//        if($profile){
//        auth()->login($user);
//        return redirect()->to('/profile');
//
//        }

//        session(['user' => $user]);
//        return redirect()->to('profile/developer');
    }

}

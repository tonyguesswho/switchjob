<?php

namespace App\Http\Controllers\Auth;

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

//        dd($user);

        $profile = Developer::where('user_id', $user->id)->first();

//        dd($profile);



        if($profile){
        auth()->login($user);
        return redirect()->to('/profile');

        }

        session(['user' => $user]);
        return redirect()->to('profile/developer');
    }

}

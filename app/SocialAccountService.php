<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;
//dont remmeber to set up twitter ouath to return email address
class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser, $provider)
    {
//        dd($providerUser);

        $account = SocialAccount::whereProvider($provider)
            ->whereProviderUserId($providerUser->getId())
            ->first();

//        dd($account);

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $provider
            ]);

//            dd($account);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}
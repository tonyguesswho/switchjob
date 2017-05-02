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

            //dd($account);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $split_name = explode(' ', $providerUser->getName());
                $first_name = $split_name[0];
                $last_name = $split_name[1];

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'firstname' => $first_name,
                    'lastname' => $last_name
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}
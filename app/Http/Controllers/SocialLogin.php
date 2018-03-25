<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;

class SocialLogin extends Controller
{
    private $redirectTo = '/';
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->getId())->orWhere('email',$user->getEmail())->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'     => $user->getName(),
            'email'    => $user->getEmail() == null ?  microtime(true) : $user->getEmail(),
            'password' => '',
            'telephone' => '',
            'provider' => $provider,
            'provider_id' => $user->getId()
        ]);

    }
}

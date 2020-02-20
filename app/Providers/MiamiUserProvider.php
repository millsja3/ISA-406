<?php

namespace App\Providers;

use App\MiamiOH\CasUser;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;

class MiamiUserProvider implements UserProvider
{
    public function retrieveById($identifier)
    {
        if ((env("APP_ENV") !== "testing") && (env("APP_ENV") !== "acceptance")) {
            $username = app('cas')->getAttribute('displayName');

            return new CasUser(['id' => $identifier, 'username' => $username]);
        } else {
            return new CasUser(['id' => $identifier, 'username' => 'Test User']);
        }
    }

    public function retrieveByToken($identifier, $token)
    {
        return new \Exception('not implemented');
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        return new \Exception('not implemented');
    }

    public function retrieveByCredentials(array $credentials)
    {
        return new \Exception('not implemented');
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        return new \Exception('not implemented');
    }
}

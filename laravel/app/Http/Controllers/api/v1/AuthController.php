<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Laravel\Sanctum\NewAccessToken;

/**
 * Class AuthController
 * @package Http\Controllers\api\v1
 */
class AuthController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return NewAccessToken
     * @throws Exception
     */
    public function login(): NewAccessToken{
        /** @var null|User $user */
        $user = User::query()->first();

        if ($user == null) throw new Exception();

        return $user->createToken($user->id);
    }
}

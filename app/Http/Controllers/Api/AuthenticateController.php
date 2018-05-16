<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthenticateController extends ApiController
{
    //
    use AuthenticatesUsers;//重写AuthenticatesUsers类

    public function __construct()
    {
        $this->middleware();
    }
}

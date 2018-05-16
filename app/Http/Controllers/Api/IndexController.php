<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\User as UserCollection;
use App\Model\User;

class IndexController extends ApiController
{
    //
    public function index()
    {
        return UserCollection::collection(User::paginate(20));
        return $this->message('这是api参数');

    }
}

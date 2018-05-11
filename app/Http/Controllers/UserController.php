<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    //
    public function show(Request $request,$id)
    {
        return response()->json(['status'=>$id]);
    }
    public function test(){
        $aa = [
            'name' => route('user.show',1),
            'currentUrl' => URL::current(),
            'actionUrl' => action('UserController@show',['id'=>6])
        ];
        return $aa;
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = 'test';
        $user->email = 'test@qq.com';
        $user->password = "123456";
        $ret = $user->save();
        return $ret;

    }

}

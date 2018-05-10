<?php

namespace App\Http\Controllers;

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
        session(['a'=>555]);
        $aa = [
            'name' => route('user.show',1),
            'currentUrl' => URL::current(),
            'actionUrl' => action('UserController@show',['id'=>6])
        ];
        return $aa;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/15
 * Time: 10:03
 */

namespace App\Http\Controllers\Api;


class UserController extends ApiController
{
    public function index()
    {
        return $this->message('请求成功了！！');
    }

}
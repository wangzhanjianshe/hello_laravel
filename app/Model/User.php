<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = "post";//重写指定表明 不重写对应类名的复数

    protected $primaryKey = "id";//默认表的主键是id 这里可以重写指定
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = 'user';
    protected $fillable = [
        'f_name',
        'l_name',
        'user_name',
        'password',
        'country_code'
    ];

    public static function addNewUser ($fName, $lName, $userName, $password, $nationalCode){
        self::query()->create(['f_name'=>$fName, 'l_name'=>$lName, 'user_name'=>$userName, 'password'=>$password, 'country_code'=>$nationalCode]);
//        self::saved();
    }


}

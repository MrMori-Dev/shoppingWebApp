<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return 1;
    }

    function createNewUser(Request $request){
        $data = $request->all();
        User::addNewUser($data['firstName'], $data['lastName'], $data['userName'], $data['password'], $data['nationalCode']);

    }

}

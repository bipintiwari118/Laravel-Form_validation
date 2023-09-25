<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(Request $req){
        $req->validate([
            'username'=>'required',
            'useremail'=>'required|email',
            'userpassword'=>'required|alpha_num|min:8',
            'userage'=>'required|numeric|between:18,40',
            'useraddress'=>'required',


        ]);
        return $req->all();
    }
}

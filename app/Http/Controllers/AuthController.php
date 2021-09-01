<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

   public function register(request $request){
/*
 *    $table->string('first_name');
            $table->string('last_name');
            $table->string('bio')->nullable();
            $table->string('email');
 * */

       $validator = Validator::make($request->all(),[
           'firstName'=> 'required|string|max:255',
           'lastName'=> 'required|string|max:255',
           'email'=> 'required|string|email|unique:users|max:255',
           'password'=>'required|string|min:6|confirmed',
      ]);

        if( $validator->fails()){
            return response(['errors'=> $validator->errors()],422);
        }

        $user = new User();
        $user ->first_name = $request->firstName;
       $user ->last_name = $request->lastName;
       $user ->email = $request->email;
       $user ->password = bcrypt($request->password);
       $user ->save();



   }
}

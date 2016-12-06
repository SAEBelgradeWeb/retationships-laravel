<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Post;
use \App\Tag;


class WelcomeController extends Controller
{
    public function index()
    {
//        $user = new User;
//        $user->name = "Vlada";
//        $user->email = "ksajdkaj";
//        $user->password = "";
//        $user->save();

        $user = User::where('name', 'Vlada')->first();

        dd($user->posts()->get()->toArray());

        //dd($users->toArray());
    }
}

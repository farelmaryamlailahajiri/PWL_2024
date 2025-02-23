<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Farel']);
    // }
    public function greeting(){
        return view('blog.hello')
            ->with('name','Farel')
            ->with('occupation','Astronaut');
    }
}

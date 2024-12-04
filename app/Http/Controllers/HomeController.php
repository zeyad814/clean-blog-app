<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $students = [
            ['name' => 'John Doe', 'age' => 20],
            ['name' => 'Jane Smith', 'age' => 22],
            ['name' => 'Mike Johnson', 'age' => 18],
            ['name' => 'Sarah Brown', 'age' => 24],
            ['name' => 'David Wilson', 'age' => 21],
        ];
        return view('home',['st'=>$students]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}


// function () {

// }

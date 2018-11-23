<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome')->withTasks([
            'Task 1',
            'Task 2',
            'Task 3',
        ]);
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }


}

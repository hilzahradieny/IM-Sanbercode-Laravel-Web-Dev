<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function registerACC () {
        return view('page.register');
    }

    public function welcomePage (Request $request) {
        $firststname = $request -> input('firstname');

        return view('welcome');
    }
}

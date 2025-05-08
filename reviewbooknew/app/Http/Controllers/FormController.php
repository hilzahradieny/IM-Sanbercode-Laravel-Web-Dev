<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function registeracc()
    {
        return view('page.register');
    }

    public function welcomepage(Request $request)
    {
        $first_name = $request ->input('firstname');
        $last_name = $request ->input('lastname');
        
        return view('welcome', ['first_name' =>$first_name, 'last_name' =>$last_name]);
    }
}

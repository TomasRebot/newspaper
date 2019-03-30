<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function frontend(){
        return view('backend.contenidos.index');
    }

    public function backend()
    {
        $this->middleware('auth');
        return view('backend.contenidos.index');
    }
}

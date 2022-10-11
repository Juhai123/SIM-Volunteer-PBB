<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimManajemenController extends Controller
{
    public function index(){
        return view('tim_manajemen.index');
    }

}

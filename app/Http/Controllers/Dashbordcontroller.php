<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashbordcontroller extends Controller
{
    public function index (){
        return view("admin.dashbord");
    }
}

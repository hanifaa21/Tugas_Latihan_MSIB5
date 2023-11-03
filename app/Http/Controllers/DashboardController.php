<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //fungsi index
    public function index(){
        return view('admin.dashboard'); //mengarah ke file dashboard yang berada pada admin
    }
}

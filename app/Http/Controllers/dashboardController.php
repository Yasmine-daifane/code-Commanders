<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\dashboardController;


class dashboardController extends Controller
{
    public function index(){
        return view('dashbord');
    }
    public function store(Request $request){}
}

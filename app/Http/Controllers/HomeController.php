<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Renungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function index(){
        $renungan = Renungan::all();
        return view('welcome', ['renungan'=>$renungan]);
    }
    
}

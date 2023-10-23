<?php

namespace App\Http\Controllers\Pemimpin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemimpinController extends Controller
{
    public function index(){
        return view('pemimpin.dashboard');
    }
}

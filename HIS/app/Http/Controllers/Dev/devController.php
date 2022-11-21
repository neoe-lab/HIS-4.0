<?php

namespace App\Http\Controllers\Dev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class devController extends Controller
{
    public function index(){
        return view('pages.devolop.index');
    }
}

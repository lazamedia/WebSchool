<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index()
    {
        return view('front.ppdb.index');
    }

    public function create()
    {
        return view('front.ppdb.form');
    }
}

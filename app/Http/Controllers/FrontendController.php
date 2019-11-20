<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend');
    }
}

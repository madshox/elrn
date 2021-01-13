<?php

namespace App\Http\Controllers;

use App\Variant;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $variants = Variant::all();
        return view('index', compact('variants'));
    }
}

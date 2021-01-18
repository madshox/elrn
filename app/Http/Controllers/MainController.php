<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    public function index()
    {
        $variants = Variant::all();
        return view('index', compact('variants'));
    }

    public function order(OrderRequest $request)
    {
        dd($request);
        Order::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
        ]);
        return Redirect::back()->with('success');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MethodRequest;
use App\Method;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $methods = Method::all();
        return view('admin.methods.index', compact('methods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $methods = Method::all();
        return view('admin.methods.form', compact('methods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MethodRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/methods');
            $params['image'] = $path;
        }

        Method::create($params);
        return redirect()->route('methods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function show(Method $method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function edit(Method $method)
    {
        return view('admin.methods.form', compact('method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function update(MethodRequest $request, Method $method)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            Storage::delete($method->image);
            $path = $request->file('image')->store('public/methods');
            $params['image'] = $path;
        }

        $method->update($params);
        return redirect()->route('methods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function destroy(Method $method)
    {
        $method->delete();
        return redirect()->route('methods.index');
    }
}

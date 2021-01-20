<?php

namespace App\Http\Controllers\Admin;

use App\Brend;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brends = Brend::all();
        return view('admin.brends.index', compact('brends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brends = Brend::all();
        return view('admin.brends.form', compact('brends'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrendRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/brends');
            $params['image'] = $path;
        }

        Brend::create($params);
        return redirect()->route('brends.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function show(Brend $brend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function edit(Brend $brend)
    {
        return view('admin.brends.form', compact('brend'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function update(BrendRequest $request, Brend $brend)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            Storage::delete($brend->image);
            $path = $request->file('image')->store('public/brends');
            $params['image'] = $path;
        }

        $brend->update($params);
        return redirect()->route('brends.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brend $brend)
    {
        $brend->delete();
        return redirect()->route('brends.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TechnologyRequest;
use App\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies = Technology::all();
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $technologies = Technology::all();
        return view('admin.technologies.form', compact('technologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TechnologyRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/technologies');
            $params['image'] = $path;
        }

        Technology::create($params);
        return redirect()->route('technologies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function show(Technology $technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function edit(Technology $technology)
    {
        return view('admin.technologies.form', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function update(TechnologyRequest $request, Technology $technology)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            Storage::delete($technology->image);
            $path = $request->file('image')->store('public/technologies');
            $params['image'] = $path;
        }

        $technology->update($params);
        return redirect()->route('technologies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();
        return redirect()->route('technologies.index');
    }
}

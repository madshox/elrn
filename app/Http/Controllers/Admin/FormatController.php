<?php

namespace App\Http\Controllers\Admin;

use App\Format;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormatRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formats = Format::all();
        return view('admin.formats.index', compact('formats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formats = Format::all();
        return view('admin.formats.form', compact('formats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormatRequest $request)
    {
        dd($request);
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/formats');
            $params['image'] = $path;
        }

        Format::create($params);
        return redirect()->route('formats.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Format  $format
     * @return \Illuminate\Http\Response
     */
    public function show(Format $format)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Format  $format
     * @return \Illuminate\Http\Response
     */
    public function edit(Format $format)
    {
        return view('admin.formats.form', compact('format'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Format  $format
     * @return \Illuminate\Http\Response
     */
    public function update(FormatRequest $request, Format $format)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            Storage::delete($format->image);
            $path = $request->file('image')->store('public/formats');
            $params['image'] = $path;
        }

        $format->update($params);
        return redirect()->route('formats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Format  $format
     * @return \Illuminate\Http\Response
     */
    public function destroy(Format $format)
    {
        $format->delete();
        return redirect()->route('formats.index');
    }
}

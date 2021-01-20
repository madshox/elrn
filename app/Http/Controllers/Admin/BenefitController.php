<?php

namespace App\Http\Controllers\Admin;

use App\Benefit;
use App\Http\Controllers\Controller;
use App\Http\Requests\BenefitRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefits = Benefit::all();
        return view('admin.benefits.index', compact('benefits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $benefits = Benefit::all();
        return view('admin.benefits.form', compact('benefits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BenefitRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/benefits');
            $params['image'] = $path;
        }

        Benefit::create($params);
        return redirect()->route('benefits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function show(Benefit $benefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function edit(Benefit $benefit)
    {
        return view('admin.benefits.form', compact('benefit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function update(BenefitRequest $request, Benefit $benefit)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            Storage::delete($benefit->image);
            $path = $request->file('image')->store('public/benefits');
            $params['image'] = $path;
        }

        $benefit->update($params);
        return redirect()->route('benefits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Benefit $benefit)
    {
        $benefit->delete();
        return redirect()->route('benefits.index');
    }
}

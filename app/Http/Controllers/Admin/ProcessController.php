<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessRequest;
use App\Process;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processes = Process::all();
        return view('admin.processes.index', compact('processes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $processes = Process::all();
        return view('admin.processes.form', compact('processes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcessRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/processes');
            $params['image'] = $path;
        }

        Process::create($params);
        return redirect()->route('processes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function show(Process $process)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $process)
    {
        return view('admin.processes.form', compact('process'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function update(ProcessRequest $request, Process $process)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->hasFile('image')) {
            Storage::delete($process->image);
            $path = $request->file('image')->store('public/processes');
            $params['image'] = $path;
        }

        $process->update($params);
        return redirect()->route('processes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function destroy(Process $process)
    {
        $process->delete();
        return redirect()->route('processes.index');
    }
}

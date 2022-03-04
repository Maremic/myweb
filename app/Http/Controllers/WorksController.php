<?php

namespace App\Http\Controllers;

use App\Models\Works;
use App\Http\Requests\StoreWorksRequest;
use App\Http\Requests\UpdateWorksRequest;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Works::all();

        return view('view.work', ['allWorks' => $works]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.work');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWorksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorksRequest $request)
    {
            Works::create([
              'title' => $request->get('title'),
              'image' => request()->file('image')->store('worksimages'),
              'slug' => $request->get('slug'),
              'excerpt' => $request->get('excerpt'),
            ]);

            return redirect('/works')->with('success', 'Work item created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function show(Works $works)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function edit(Works $works)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorksRequest  $request
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorksRequest $request, Works $works)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function destroy(Works $works)
    {
        //
    }
}

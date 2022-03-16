<?php

namespace App\Http\Controllers;

use App\Models\Works;
use App\Http\Requests\StoreWorksRequest;
use App\Http\Requests\UpdateWorksRequest;
use Illuminate\Validation\Rule;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Works::latest()->paginate(5);

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
    public function edit($id)
    {
        $work = Works::findOrFail($id);

        return view('edit.work' ,['work' => $work]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorksRequest  $request
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorksRequest $request, Works $work)
    {
        $attributes = $this->validatePost($work);

        if ($attributes['image'] ?? false) {
            $attributes['image'] = request()->file('image')->store('worksimages');
        }

        $work->update($attributes);

        return redirect('/works')->with('success', 'Work gallery item Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Works::findOrFail($id);
        $work->delete();

        return redirect('/works')->with('success', 'Section is successfully deleted');
    }

    protected function validatePost(?Works $work = null): array
    {
        $work ??= new Works();

        return request()->validate([
            'title' => 'required',
            'image' => $work->exists ? ['image'] : ['required', 'image'],
            'slug' => ['required', Rule::unique('works', 'slug')->ignore($work)],
            'excerpt' => 'required',
        ]);
    }
}

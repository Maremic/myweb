<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use App\Http\Requests\StoreHobbyRequest;
use App\Http\Requests\UpdateHobbyRequest;
use Illuminate\Validation\Rule;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobbies = Hobby::latest()->paginate(5);

        return view('view.hobby', ['allHobbies' => $hobbies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.hobby');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHobbyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHobbyRequest $request)
    {
            Hobby::create([
              'sctitle' => $request->get('sctitle'),
              'image' => request()->file('image')->store('hobbiesimages'),
              'section' => $request->get('section'),
            ]);

            return redirect('/hobbies')->with('success', 'Hobby section created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function show(Hobby $hobbies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hobby  $hobbies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobby = Hobby::findOrFail($id);

        return view('edit.hobby' ,['hobby' => $hobby]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHobbyRequest  $request
     * @param  \App\Models\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHobbyRequest $request, Hobby $hobby)
    {
        $attributes = $this->validatePost($hobby);

        if ($attributes['image'] ?? false) {
            $attributes['image'] = request()->file('image')->store('hobbiesimages');
        }

        $hobby->update($attributes);

        return redirect('/hobbies')->with('success', 'Hobby section Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hobby = Hobby::findOrFail($id);
        $hobby->delete();

        return redirect('/hobbies')->with('success', 'Section is successfully deleted');
    }

    protected function validatePost(?Hobby $hobby = null): array
    {
        $hobby ??= new Hobby();

        return request()->validate([
            'sctitle' => 'required',
            'image' => $hobby->exists ? ['image'] : ['required', 'image'],
            'section' => 'required',
        ]);
    }
}


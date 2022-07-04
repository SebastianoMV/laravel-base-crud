<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicsRequest;
use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required|max:50|min:3',
                'image' => 'required|max:255|min:10',
                'type' => 'required|max:50|min:3',
            ],
            [
                'title.required' => 'Il campo nome è obbligatorio',
                'title.max' => 'Il campo nome deve avere al massimo :max caratteri',
                'title.min' => 'Il campo nome deve avere al minimo :min caratteri',
                'image.required' => 'Il campo immagine è obbligatorio',
                'image.max' => 'Il campo immagine deve avere al massimo :max caratteri',
                'image.min' => 'Il campo immagine deve avere al minimo :min caratteri',
                'type.required' => 'Il campo genere è obbligatorio',
                'type.max' => 'Il campo genere deve avere al massimo :max caratteri',
                'type.min' => 'Il campo genere deve avere al minimo :min caratteri',

            ]
        );

        $data = $request->all();

        $new_comic = new Comic();

        $new_comic-> fill($data);
        $new_comic->slug = Str::slug($data['title'], '-');

        // $new_comic->title = $data['title'];
        // $new_comic->image = $data['image'];
        // $new_comic->type = $data['type'];
        // $new_comic->slug = Str::slug($data['title'], '-');
        
        $new_comic->save();

        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        if($comic){
            return view('comics.show', compact('comic'));
        }
        abort(404, 'Fumetto non presente');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $comic = Comic::find($id);
        if($comic){
            return view('comics.edit', compact('comic'));
        }
        abort(404, 'Fumetto non presente');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicsRequest $request, Comic $comic)
    {

        $data = $request->all();

        $data['slug'] = Str::slug($data['title'], '-') ;

        $comic->update($data);

        return redirect()->route('comics.index', $comic);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('fumetto_eliminato', "Il fumetto $comic->title è stato eliminato");
    }



}

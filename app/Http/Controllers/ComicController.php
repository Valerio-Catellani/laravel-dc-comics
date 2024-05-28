<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Functions\Helpers as Help;

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
        foreach ($comics as $comic) {
            $comic->vote_tmp = Help::getStars($comic->rating);
        }
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $form_data["price"] = '$' . $form_data["price"];
        $new_comic = new Comic();
        $new_comic->fill($form_data);
        $new_comic->save();
        return redirect()->route("comics.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($comic->id);
        $comic->vote_tmp = Help::getStars($comic->rating);
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic_to_change = Comic::findOrFail($id);
        $form_data = $request->all();
        $form_data["price"] = '$' . $form_data["price"];
        $comic_to_change->fill($form_data);
        $comic_to_change->update();
        return redirect()->route("comics.show", $comic_to_change->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        // Opzionalmente, puoi aggiungere un messaggio di successo e reindirizzare a una pagina specifica
        return redirect()->route('comics.index')->with('message', "Comic (id:{$comic->id}): {$comic->title} eliminato con successo");
    }
}

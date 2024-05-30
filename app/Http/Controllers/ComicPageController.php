<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
class ComicPageController extends Controller
{
    public function index()
    {

        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {

        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $form_data = $request->all();
        
        $new_comic = Comic::create($form_data);
        return to_route('comics.show', $new_comic);
        
    }
}

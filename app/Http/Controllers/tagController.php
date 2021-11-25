<?php

namespace App\Http\Controllers;
use App\Models\Tag;

use Illuminate\Http\Request;

class tagController extends Controller
{
    public function create(){
        return view('tag.createTag');
    }

    public function store(Request $request){
        
        Tag::create([
            'description' => $request->description,
            'color' => $request->color,
        ]);

        return "Tag adicionada com sucesso!";
    }

    public function show($id){
        $tag = Tag::findOrFail($id);
        return view('tag.viewTag', ['tag' => $tag]);
    }

    public function update(Request $request, $id){
        $tag = Tag::findOrFail($id);

        $tag->update([
            'description'=> $request->description,
            'color' => $request->color,
        ]);

        return "Tag atualizada com sucesso";
    }
}

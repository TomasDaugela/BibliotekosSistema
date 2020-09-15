<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        return view('author.index', ['authors' => Author::orderBy('name')->get()]);
    }
    public function create() {
        return view('author.create');
    }
    public function store(Request $request) {

      
        $horse = new Author();
     // can be used for seeing the insides of the incoming request
         // var_dump($request->all()); die();
        $horse->fill($request->all());
        
        $horse->save();
        return redirect()->route('authors.index');
        
    }
 
    public function edit(Author $author){
        return view('author.edit', ['author' => $author]);
    }
 
    public function update(Request $request, Author $author){
        $author->fill($request->all());
        $author->save();
        return redirect()->route('authors.index');
    }
 
    public function destroy(Author $author) {
        $author->delete();
        return redirect()->route('authors.index');
    }
}

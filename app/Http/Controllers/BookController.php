<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('book.index', ['books' => Book::orderBy('title')->get()]);
    }
    // ATTENTION :: we need countries to be able to assign them
    public function create(){
        $authors = \App\Author::orderBy('name')->get();
        return view('book.create', ['authors' => $authors]);
    }
    public function store(Request $request){
        $book = new Book();
        // can be used for seeing the insides of the incoming request
        // var_dump($request->all()); die();
        $book->fill($request->all());
        $book->save();
        return redirect()->route('books.index');
    }
    public function show(Book $book){
        //
    }
    // ATTENTION :: we need countries to be able to assign them
    public function edit(Book $book){
        $authors = \App\Author::orderBy('name')->get();
        return view('book.edit', ['book' => $book, 'authors' => $authors]);
    }
    public function update(Request $request, Book $book){
        $book->fill($request->all());
        $book->save();
        return redirect()->route('books.index');
    }
    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('books.index');
    }
}

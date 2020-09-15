@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeiskime Knygos Informaciją</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('books.update', $book->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Pavadinimas: </label>
                            <input type="text" name="title" class="form-control" value="{{ $book->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">puslapiai: </label>
                            <input type="number" name="pages" class="form-control" value="{{ $book->pages }}">
                        </div>
                        <div class="form-group">
                            <label for="">Isbn Kodas: </label>
                            <input type="text" name="isbn" class="form-control" value="{{ $book->isbn }}">
                        </div>
                        <div class="form-group">
                            <label for="">Aprašas</label>
                            <textarea id="mce" type="text" name="short_description" rows=10 cols=100 class="form-control">{{ $book->short_description }}</textarea>
                        </div>
                       <div class="form-group">
                           <label>Autorius: </label>
                           <select name="author_id" id="" class="form-control" value="{{ $book->author_id }}">
                                <option value="" selected disabled>Pasirinkite Autorių</option>
                                @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                           </select>
                       </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

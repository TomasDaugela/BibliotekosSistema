@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Knyga:</div>
               <div class="card-body">
                   <form action="{{ route('books.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                            <label for="">Pavadinimas: </label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Puslapiai: </label>
                            <input type="number" name="pages" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">isbn Kodas: </label>
                            <input type="text" name="isbn" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Aprašymas: </label>
                            <textarea id="mce" name="short_description" rows=10 cols=100 class="form-control"></textarea>
                        </div>
                       <div class="form-group">
                           <label>Autorius: </label>
                           <select name="author_id" id="" class="form-control">
                                <option value="" selected disabled>Pasirinkite Autorių</option>
                                @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                           </select>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<h1 class="text-center">Knygos</h1>
<div class="card-body">
   

    <table class="table">
        <tr>
            <th>Pavadinimas</th>
            <th>Puslapiai</th>
            <th>isbn</th>
            <th>Aprašymas</th>
            <th>Autoriaus id</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->pages }}</td>
            <td>{{ $book->isbn }}</td>
            <td>{!! $book->short_description !!}</td>
            <td>{{ $book->author_id}}</td>
            <td>
                <form action={{ route('books.destroy', $book->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('books.edit', $book->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('books.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>

@endsection

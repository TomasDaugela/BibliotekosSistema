@extends('layouts.app')
@section('content')
<h1 class="text-center">Autoriai</h1>
<div class="card-body">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
    <table class="table">
        <tr>
            <th>id</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->surname }}</td>
            <td>
                <form action={{ route('authors.destroy', $author->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('authors.edit', $author->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('authors.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
<?php
    
    
?>
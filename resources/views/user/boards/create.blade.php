@extends('layouts.app')

@section('title', "Create a new board")

@section('content')
    <p>Add a board</p>
    <div>
        <form action="/boards" method="POST">
            @csrf
            <label for="title">Entrez le titre du board :</label>
            <input type="text" name="title" id="title" required><br><br>
            <label for="textarea">Entrez la description du board</label>
            <input type="text" name="textarea" id="textarea" required><br>

            <button type="submit">Create Board</button>
        </form>
    </div>
@endsection

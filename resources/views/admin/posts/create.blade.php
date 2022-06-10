@extends('layouts.app')
@section('title', 'Crea un nuovo post')
@section('content')

<div class="container bg-create py-3">
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Inserisci il titolo</label>
          <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
        </div>
        <div class="form-group">
          <label for="content">Inserisci in contenuto</label>
          <input type="text" class="form-control" id="content" name="content">
        </div>
        <div class="form-group form-check">
          <label class="form-check-label" for="image">Inserisci immagine</label>  
          <input type="text" class="form-control" id="image" name="image">
        </div>
        <div class="form-group form-check">
          <label class="form-check-label" for="slug">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection
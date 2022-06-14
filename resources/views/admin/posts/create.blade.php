@extends('layouts.app')
@section('title', 'Crea un nuovo post')
@section('content')

<div class="container bg-create py-3">
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Inserisci il titolo</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" enctype="multipart/form-data">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" id="category">
                <option value="">Nessuna Categoria</option>
                @foreach ($categories as $category )
                <option @if( old( 'category_id' )==$category->id ) selected @endif
                    value=" {{ $category->id }} ">{{ $category->label }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">Inserisci in contenuto</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <div class="form-group">
            <label for="image">Immagine del post</label>
            <input type="file" class="form-control-file" id="image" placeholder="url dell'immagine" name="image">
        </div>
        {{-- <div class="form-group form-check">
            <label class="form-check-label" for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
        </div> --}}
        <hr>

        <h5>Seleziona tags</h5>
        <div class="form-check form-check-inline">
            @forelse($tags as $tag)
            <input class="form-check-input" type="checkbox" id="tag-{{$tag->id}}" value="{{$tag->id}}" name="tags[]"
                @if(in_array($tag->id, old('tags', []))) checked @endif
            >

            <label class="form-check-label mr-3" for="tag-{{$tag->id}}">{{ $tag->label }}</label>

            @empty
            <h3>Non ci sono tag</h3>
            @endforelse

        </div>
        <div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </div>


    </form>


</div>

@endsection

@extends('layouts.app')
@section('title', 'Modifica post')
@section('content')

<div class="container bg-edit py-3">
    <form action="{{route('admin.posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="title">Modifica il titolo</label>
          <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{old('title', $post->title)}} ">
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select name="category_id" id="category">
              <option value="">Nessuna Categoria</option>
              @foreach ($categories as $category )
                  <option
                      @if( old( 'category_id', $post->category_id ) == $category->id ) selected @endif
                      value=" {{ $category->id }} "
                      >{{ $category->label }}</option>
              @endforeach
          </select>
      </div>
        <div class="form-group">
          <label for="content">Modifica in contenuto</label>
          <input type="text" class="form-control" id="content" name="content" value="{{old('content', $post->content)}} ">
        </div>
        <div class="form-group">
          <label class="form-check-label" for="image">Inserisci immagine</label>
          <input type="file" class="form-control-file" placeholder="url dell'immagine" id="image" name="image">
      </div>
        {{-- <div class="form-group form-check">
          <label class="form-check-label" for="image">Modifica immagine</label>  
          <input type="text" class="form-control" id="image" name="image" value="{{old('image', $post->image)}} ">
        </div> --}}
        <div class="form-group form-check">
            <label class="form-check-label" for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug', $post->slug)}} ">
          </div>

          <h5>Modifica tags</h5>
        <div class="form-check form-check-inline">
            @forelse($tags as $tag)
            <input class="form-check-input" type="checkbox" id="tag-{{$tag->id}}" value="{{$tag->id}}" name="tags[]"
                @if(in_array($tag->id, old('tags', $post_tags_id))) checked @endif
            >

            <label class="form-check-label mr-3" for="tag-{{$tag->id}}">{{ $tag->label }}</label>

            @empty
            <h3>Non ci sono tag</h3>
            @endforelse

        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
</div>

@endsection
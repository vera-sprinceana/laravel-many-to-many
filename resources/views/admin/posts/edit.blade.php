@extends('layouts.app')
@section('title', 'Modifica post')
@section('content')

<div class="container bg-edit py-3">
    <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
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
        <div class="form-group form-check">
          <label class="form-check-label" for="image">Modifica immagine</label>  
          <input type="text" class="form-control" id="image" name="image" value="{{old('image', $post->image)}} ">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label" for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug', $post->slug)}} ">
          </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
</div>

@endsection
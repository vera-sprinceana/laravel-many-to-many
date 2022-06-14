@extends('layouts.app')
@section('title', 'Post')
@section('content')
<div class="container">
    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <img src="{{ asset("storage/$post->image") }}" alt="post->image" class="my-4">
    <h3>{{$post->title}}</h3>
    <p>{{$post->content}}</p>
    <h3>Tags:</h3>
    @forelse($post->tags as $tag) 
        <span class="badge" style="background-color: {{$tag->color}}" >{{$tag->label}}</span>
    @empty 
    <h3>Non ci sono tag abbinati</h3>
    @endforelse
   
    @include('includes.deletePost')
</div>

@endsection
@section('scripts')
<script src="{{ asset('js/delete-form.js') }}"></script>
@endsection
@extends('layouts.app')
@section('title', 'Post')
@section('content')
<div class="container">
    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <img src="{{$post->image}}" alt="post->image" class="my-4">
    <h3>{{$post->title}}</h3>
    <p>{{$post->content}}</p>
    @include('includes.deletePost')
</div>

@endsection
@section('scripts')
<script src="{{ asset('js/delete-form.js') }}"></script>
@endsection
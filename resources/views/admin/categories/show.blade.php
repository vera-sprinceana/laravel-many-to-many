@extends('layouts.app')
@section('title', 'Category')
@section('content')
<div class="container">
    @if(session('message'))
    <div class="alert alert-danger">
        {{session('message')}}
    </div>
    @endif
    <h2>{{ $category->label}}</h2>
    <h3>{{ $category->color}}</h3>
    <span>
        @include('includes.deleteCategory')
    </span>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/delete-form.js') }}"></script>
@endsection

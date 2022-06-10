@extends('layouts.app')
@section('title', 'Posts')
@section('content')
<div class="container">
    @if(session('message'))
    <div class="alert alert-danger">
        {{session('message')}}
    </div>
    @endif
    <a href="{{route('admin.categories.create')}}" class="btn btn-outline-info my-3">Crea nuova categoria +</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Label</th>
                <th scope="col">Color</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{ $category->label}}</td>
                <td>{{ $category->color}}</td>
                <td><a href="{{route('admin.categories.show', $category->id)}}" class="btn btn-primary">View</a></td>
                <td><a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-warning">Modifica</a></td>
                
                <td>
                    @include('includes.deleteCategory')
                </td>
            </tr>
            @empty
            <h2>Non ci sono categorie</h2>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
@section('scripts')
<script src="{{ asset('js/delete-form.js') }}"></script>
@endsection
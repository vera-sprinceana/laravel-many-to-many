
<form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="delete-form">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

@section('scripts')
<script src="{{ asset('js/delete-form.js') }}"></script>
@endsection
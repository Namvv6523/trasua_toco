@extends('admin.index')
@section('content')
    <form action="{{ BASE_URL }}category/update/{{ $detailCate->id }}" method="post">
        <div class="mb-3 w-50 mx-auto">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" disabled>
        </div>

        <div class="mb-3 w-50 mx-auto">
            <label class="form-label">Name Category</label>
            <input type="tetx" class="form-control" name="name" value="{{ $detailCate->name }}">
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-primary" type="submit" name="submit">Update</button>
        </div>

    </form>
@endsection

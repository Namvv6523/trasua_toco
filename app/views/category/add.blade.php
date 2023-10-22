@extends('admin.index')
@section('content')


    
        <form action="{{BASE_URL}}category/create" method="post" >
            <div class="mb-3 w-50 mx-auto">
                <label  class="form-label">ID</label>
                <input type="text" class="form-control" disabled>
            </div>

            <div class="mb-3 w-50 mx-auto">
                <label  class="form-label">Name Category</label>
                <input type="tetx" class="form-control" name="ten" >
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-success" type="submit" name="submit">Add</button>
            </div>

        </form>
    
@endsection

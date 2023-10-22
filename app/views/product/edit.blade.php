@extends('admin.index')
@section('content')


    <p class="text-uppercase fs-4 fw-bold py-2">Sửa sản phẩm</p>
    <div class="card shadow">
        <form action="{{ BASE_URL }}" method="post" enctype="multipart/form-data">


            <div class="mb-3 w-50 mx-auto">
                <label class="form-label">Name </label>
                <input type="tetx" class="form-control h-25" name="ten" value="{{product->name}}">
            </div>

            <div class="mb-3 w-50 mx-auto">
                <label class="form-label">Price</label>
                <input type="tetx" class="form-control h-25" name="price" value="">
            </div>

            <div class="mb-3 w-50 mx-auto">
                <label class="form-label">Image</label>
                <input type="file" class="form-control h-25" name="image" value="">
            </div>

            <div class="mb-3 w-50 mx-auto">
                <label class="form-label">Description</label>
                <input type="tetx" class="form-control h-25" name="desc" value="">
            </div>

            <div class="mb-3 w-50 h-25 mx-auto">
                <label class="form-label">Category</label>
                <select class="form-select form-select-lg" name="iddm">
                    @foreach ($loadCate as $cate)
                        <option value=" {{ $cate->id }}" class="fs-6 h-25"> {{ $cate->name }} </option>
                    @endforeach
                </select>

            </div>

            <div class="d-flex justify-content-center py-3">
                <button class="btn btn-primary" type="submit" name="submit">Edit</button>

            </div>

        </form>
    </div>
@endsection

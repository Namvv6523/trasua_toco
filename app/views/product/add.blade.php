@extends('admin.index')
@section('content')
    <p class="text-uppercase fs-4 fw-bold py-2">Thêm sản phẩm</p>
    <div class="card shadow">
        <form action="{{ BASE_URL }}product/create"  method="post" enctype="multipart/form-data" >


            <div class="mb-3 w-50 mx-auto">
                <label class="form-label" >Name </label>
                <input type="tetx" class="form-control h-25"  name="ten">
            </div>

            <div class="mb-3 w-50 mx-auto">
                <label class="form-label">Price</label>
                <input type="tetx" class="form-control h-25" name="price">
            </div>

            <div class="mb-3 w-50 mx-auto">
                <label class="form-label">Image</label>
                <input type="file" class="form-control h-25" name="image">
            </div>

            <div class="mb-3 w-50 mx-auto">
                <label class="form-label">Description</label>
                <input type="tetx" class="form-control h-25" name="desc">
            </div>

            <div class="mb-3 w-50 h-25 mx-auto">
                <label class="form-label">Category</label>
                <select class="form-select form-select-lg" name="iddm">
                    <option value="">--Chọn danh mục--</option>
                    @foreach ($loadCate as $cate)
                        <option value=" {{ $cate->id }}" class="fs-6 h-25"> {{ $cate->name }} </option>
                    @endforeach
                </select>

            </div>

            <div class="d-flex justify-content-center py-3">
                <button class="btn btn-success" type="submit" name="submit">Add</button>
                
            </div>

        </form>
    </div>
@endsection

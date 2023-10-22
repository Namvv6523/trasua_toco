@extends('admin.index')
@section('content')
    <div class="p-3 ">
        <div class="card-content">
            <a href="{{BASE_URL}}product/store" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
            <table id="example" class="table">
                <thead>
                    <th>#</th>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Action</th>
                </thead>
                @foreach ($product as $prd)
                    <tbody>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>{{ $prd->id }}</td>
                        <td>{{ $prd->name }}</td>
                        <td>{{ $prd->price }}</td>
                        <td><img src="<?= '../upload/' . $prd->image ?>" width="50px" alt=""></td>
                        <td>{{ $prd->description }}</td>
                        <td>{{ $prd->iddm }}</td>

                        <td>
                            <a href="{{ BASE_URL }}/product/detail/{{ $prd->id }}" class="btn btn-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <a href="{{ BASE_URL }}/product/remove/{{ $prd->id }}" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tbody>
                @endforeach
            </table>
        </div>



        {{-- ------------start pagination----------------- --}}
         <div class="d-flex justify-content-between">

            <div>
                <strong>Page of</strong>
            </div>

            <nav aria-label="Page navigation example ">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div> 
        {{-- ------------end pagination----------------- --}}







    </div>
@endsection

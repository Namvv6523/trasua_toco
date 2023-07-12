@extends('admin.index')
@section('content')
    <div class="p-3 " >


        <table class="table">
            <thead>
                <th>#</th>
                <th>ID</th>
                <th>NAME</th>
                <th>ACTION</th>
            </thead>
            @foreach ($category as $cate)
                <tbody>
                    <td><input class="form-check-input" type="checkbox"></td>
                    <td>{{ $cate->id }}</td>
                    <td>{{ $cate->name }}</td>
                    <td>
                        <a href="{{ BASE_URL }}category/detail/{{ $cate->id }}" class="btn btn-primary">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <a href="{{ BASE_URL }}category/delete/{{ $cate->id }}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tbody>
            @endforeach

        </table>

        <div class="d-flex align-items-end justify-content-end">
            <nav aria-label="Page navigation example ">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
@endsection

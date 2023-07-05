@extends('admin.index')
@section('content')
    <div class="p-3">

        <a href="" class="btn btn-success my-3"><i class="fa-solid fa-plus"></i></a>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>ACTION</th>
            </thead>
            @foreach ($category as $cate)
                <tbody>
                    <td>{{ $cate->id }}</td>
                    <td>{{ $cate->name }}</td>
                    <td>
                        <a href="" class="btn btn-primary">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <a href="" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tbody>
            @endforeach

        </table>
    </div>
@endsection

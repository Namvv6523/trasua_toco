<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.style')
    <title>Trang chủ Admin</title>

</head>

<body>
    <div class="container-fuild">
        <div class="row flex-nowrap">

            {{-- start admin-asidebar-left --}}
            <div class="col-2 bg-dark sidebar fixed-left " style="height: 630px;">

                <div class="mt-4 position-sticky">
                    <a href=""
                        class="text-white text-decoration-none d-none d-sm-inline d-flex align-items-center ms-4"
                        role="button">
                        <img src="{{ BASE_URL }}img/logo/logo_png.jpg" width="40" height="40"
                            class="rounded-circle me-2" alt="">
                        <span class="fs-5 font-monospace">TocoToco</span>
                    </a>
                    <hr class="text-white" />
                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page">
                                <i class="fa fa-gauge me-2"></i>
                                <span class="d-none d-sm-inline">Dashbroad</span>
                            </a>
                        </li>

                        {{-- ---------- --}}
                        <li class="nav-item ">
                            <a href="#category" class="nav-link text-white" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="category">
                                <i class="fa fa-table me-2"></i>
                                <span class="d-none d-sm-inline">Danh mục</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="nav collapse ms-1  " id="category">
                                <li class="nav-item ">
                                    <a href="{{ BASE_URL }}category/show" class="nav-link text-white"
                                        aria-current="page">Quản lý danh mục </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ BASE_URL }}category/store" class="nav-link text-white">Thêm danh mục</a>
                                </li>
                            </ul>
                        </li>

                        {{-- ------------------ --}}
                        <li class="nav-item ">
                            <a href="#products" class="nav-link text-white" data-bs-target=".multi-collapse"
                                data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="products">
                                <i class="fa-solid fa-list me-2"></i>
                                <span class="d-none d-sm-inline">Sản phẩm</span>
                                <i class="fa fa-caret-down"></i>
                            </a>

                            <ul class="nav collapse ms-1 multi-collapse" id="products">
                                <li class="nav-item ">
                                    <a href="{{ BASE_URL }}product/show" class="nav-link text-white"
                                        aria-current="page">Quản lý sản phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ BASE_URL }}product/store" class="nav-link text-white">Thêm sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        {{-- -------------------- --}}

                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page">
                                <i class="fa fa-users"></i>
                                <span class="ms-2 d-none d-sm-inline">Customers</span>
                            </a>
                        </li>

                    </ul>
                </div>

                {{-- tài khoản --}}
                {{-- <div class="dropdown open py-3">
                    <a class="btn btn-secondary border-none outline-none dropdown-toggle" type="button" id="triggerId"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user me-2"></i><span>Yousaf</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Setting</a>
                    </div>
                </div> --}}



            </div>

            {{-- end admin-asidebar-left --}}

            {{-- admin-asidebar-right --}}
            <div class="col-10">
                <div class="bg-white p-3 border-bottom d-flex justify-content-between ">
                    <a href="" class="text-secondary"><i class="fa-solid fa-bars mt-2 fs-5"></i></a>
                    <form class="d-flex ms-2">
                        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>

                {{-- name cate --}}

                <div class="m-2" style="height: 480px; overflow-y: auto;">
                    <section class="content p-2">
                        @yield('content')
                    </section>
                </div>


            </div>
        </div>


    </div>
</body>

<script src="../../../public/assets/admin.js"></script>
</html>

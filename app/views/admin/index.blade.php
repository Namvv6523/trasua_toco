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
        <div class="row">

            {{-- admin-asidebar-left --}}
            <div class="col-2 bg-secondary ">
                <div class="bg-secondary border-bottom">
                    <p class="text-center text-white mt-3 fs-4 fw-bold "> <img
                            src="{{ BASE_URL }}img/logo/logo_png.jpg" width="40px" class="rounded-circle"
                            alt=""> Trà Sữa</p>
                </div>

                {{-- danh mục --}}
                <div class="mt-4 list-group lh-lg ms-4  ">
                    <a class="text-white text-decoration-none p-2" href=""><i class="fa-solid fa-gauge me-2 fs-5"></i>Dashboard</a>
                    <a class="text-white text-decoration-none p-2" href=""><i class="fa-solid fa-cart-shopping me-2 fs-5"></i>Đơn hàng</a>
                    <a class="text-white text-decoration-none p-2" href="{{BASE_URL}}category/show"><i class="fa-solid fa-list me-2 fs-5"></i>Danh mục</a>
                    <a class="text-white text-decoration-none p-2" href=""><i class="fa-solid fa-users me-2 fs-5"></i>Tài khoản</a>
                    <a class="text-white text-decoration-none p-2" href=""><i class="fas fa-address-book me-2 fs-5"></i>Sản phẩm</a>
                    <a class="text-white text-decoration-none p-2" href=""><i class="fa-regular fa-message me-2 fs-5"></i>Bình luận</a>
                    <a class="text-white text-decoration-none p-2" href=""><i class="fa-solid fa-chart-column me-2 fs-5"></i>Thống kê</a>
                    <a class="text-white text-decoration-none p-2" href=""><i class="fa-regular fa-address-book me-2 fs-5"></i>Liên hệ</a>
                </div>


            </div>

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
                <p class="text-uppercase fs-3 fw-bold py-3">Danh mục</p>

                <div class="border">
                    <section class="content">
                        @yield('content')
                    </section>
                </div>


            </div>
        </div>


    </div>
</body>

</html>

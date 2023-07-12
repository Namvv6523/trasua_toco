<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});

/* ----------------Category---------------------- */
$router->get('category/show', [App\Controllers\CategoryController::class, 'showCate']); // liệt kê danh mục
$router->get('category/store', [App\Controllers\CategoryController::class, 'store']); // tạo form
$router->post('category/create', [App\Controllers\CategoryController::class, 'create']); // lưu dữ liệu thêm
$router->get('category/detail/{id}', [App\Controllers\CategoryController::class, 'detailCate']); // tạo form
$router->post('category/update/{id}', [App\Controllers\CategoryController::class, 'updateCate']); // lưu dữ liệu sửa
$router->get('category/delete/{id}', [App\Controllers\CategoryController::class, 'delete']); // xóa



$router->get('/', function() {
    return 'trang chủ';
});

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>
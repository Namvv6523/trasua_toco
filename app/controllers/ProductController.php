<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends BaseController
{
    private $product;
    private $category;


    // xây dựng hàm khởi tạo
    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }

    // xây dựng hàm hiểm thị sản phẩm
    public function showPrd()
    {
        $product = $this->product->indexPrd();
        return $this->render('product.index', compact('product'));
    }

    // xây dựng hàm tạo form thêm
    public function store()
    {
        $loadCate =  $this->category->show();
        $this->render('product.add', compact('loadCate'));
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['submit'])) {
                $ten = $_POST['ten'];
                $price = $_POST['price'];
                $hinhanh = $_FILES['image']['name'];
                $desc = $_POST['desc'];
                $iddm = $_POST['iddm'];
                $product = $this->product->add($ten, $price, $hinhanh, $desc, $iddm);
                header('location: ' . BASE_URL . 'product/show');
            }
            return $this->render('product.add', compact('product'));
        }
    }

     // xây dựng hàm detail
     public function detailPrd($id){
        $product = $this->product->detail($id);
        return $this->render('product.edit', compact('product'));
    }

    // xây dựng hàm edit
    // public function updateStudent($id){

    //     if(isset($_POST['submit'])){
    //         $errors = [];
    //         $data = [];

    //         $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    //         $data['price'] = isset($_POST['price']) ? $_POST['price'] : '';
    //         $data['desc'] = isset($_POST['desc']) ? $_POST['desc'] : '';

    //         if(empty($_POST['name'])){
    //             $errors[] = "Bạn chưa nhập tên";
    //         }

    //         if(empty($_POST['price'])){
    //             $errors[] = "Bạn chưa nhập giá";
    //         }

    //         if(empty($_POST['age'])){
    //             $errors[] = "Bạn chưa nhập age";
    //         }

    //         if(count($errors) > 0){
    //             redirect('errors', $errors, 'student/update-student');
    //             die;
    //         }else{
    //             $result = $this->student->update($id, $_POST['name'], $_POST['email'], $_POST['age']);

    //             if($result){
    //                 redirect('success', "Thêm thành công", 'student/list-student');
    //                 die;
    //             }
    //         }
    //     }
    // }


    // xây dựng hàm xóa
    public function remove($id){
        $this->product->delete($id);
        header('location:' .BASE_URL. 'product/show');
    }
}

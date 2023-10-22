<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController extends BaseController
{
    public $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    // xây dựng hàm show
    public function showCate()
    {
        $category = $this->category->show();
        return $this->render('category.index', compact('category'));
    }

    
    // xây dựng form thêm danh mục
    public function store()
    {
        $this->render('category.add');
    }

    // xây dựng hàm lưu danh mục vào data
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['submit'])) {
                $name = $_POST['ten'];
                $create = $this->category->add($name);
                header('location:' . BASE_URL . 'category/show');
            }
            return $this->render('category.add', compact('create'));
        }
    }

    // xây dựng hàm form sửa danh mục
    public function detailCate($id){
        $detailCate = $this->category->detail($id);
        return $this->render('category.edit', compact('detailCate'));
    }

    // xây dựng hàm lưu danh mục sửa
    public function updateCate($id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $update = $this->category->update($id, $name);
                header('location:' . BASE_URL . 'category/show');
            }
            return $this->render('category.edit', compact('update'));
        }
    }

    // xây dựng hàm xóa danh mục
    public function delete($id)
    {
        $this->category->remove($id);
        header('location:' . BASE_URL . 'category/show');
    }

    // xây dựng hàm load danh mục 
    public function load_cate(){
        $loadcate = $this->category->loadCate();
        return $this->render('product.index', compact('loadcate'));
    }
}

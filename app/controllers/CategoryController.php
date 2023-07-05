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

    public function showCate()
    {
        $category = $this->category->show();
        return $this->render('category.index', compact('category'));
    }

    public function store(){
        $this->render('category.add');
    }
}

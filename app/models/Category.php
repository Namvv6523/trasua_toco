<?php

namespace App\Models;

class Category extends BaseModel
{
    protected $table = 'category';

    //  xây dựng hàm hiển thị danh mục
    public function show()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
        // var_dump($this->loadAllRows());
        
    }

    // xây dựng hàm thêm danh mục
    public function add($name){
        $sql = "INSERT INTO $this->table (name) VALUES (?)";
        $this->setQuery($sql);
        return $this->execute([$name]);
    }

    // xây dựng hàm lấy dữ liệu
    public function detail($id){
        $sql = "SELECT * FROM $this->table WHERE id =? ";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    // xây dựng hàm sửa danh mục
    public function update($id, $name){
        $sql = "UPDATE $this->table SET name = ? WHERE id = ? ";
        $this->setQuery($sql);
        return $this->execute([$name, $id]);
    }

    // xây dựng hàm xóa danh mục
    public function remove($id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }

    // xây dựng hàm load tên danh mục
    public function loadCate(){
        $sql = "SELECT * FROM $this->table ORDER BY id DESC ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}

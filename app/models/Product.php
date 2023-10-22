<?php

namespace App\Models;

class Product extends BaseModel
{
    protected $tablePrd = 'product';
    protected $tableCate = 'category';


    // tạo hàm hiển thị sản phẩm
    public function indexPrd()
    {
        $sql = "SELECT * FROM $this->tablePrd LIMIT 5";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // xây dựng  hàm add sản phẩm
    public function add($ten, $price, $image, $desc, $iddm)
    {
        $sql = "INSERT INTO $this->tablePrd (name, price, image, description, iddm) VALUES (?,?,?,?,?)";
        move_uploaded_file($_FILES["image"]["tmp_name"],"./upload/".$_FILES["image"]["name"]);
        $this->setQuery($sql);
        return $this->execute([$ten, $price, $image, $desc, $iddm]);
    }

    // xây dựng hàm detail
    public function detail($id)
    {
        $sql = "SELECT * FROM $this->tablePrd WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    // xây dựng hàm cập nhập
    public function update($id, $name,$price, $image, $desc, $iddm)
    {
        $sql = "UPDATE $this->tablePrd SET name = ?, price = ?, image = ?, description = ?, iddm = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $price, $image, $desc, $iddm, $id]);
    }

    // xây dựng hàm xóa sản phẩm
    public function delete($id)
    {
        $sql = "DELETE FROM $this->tablePrd WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}

<?php

namespace App\Models;

class Category extends BaseModel
{
    protected $table = 'category';

    public function show()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
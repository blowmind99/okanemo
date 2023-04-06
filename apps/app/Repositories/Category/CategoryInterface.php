<?php

namespace App\Repositories\Category;

interface CategoryInterface
{
    public function getList();
    public function getById($id);
    public function create($attributes);
    public function update($id, $attributes);
    public function delete($id);
}

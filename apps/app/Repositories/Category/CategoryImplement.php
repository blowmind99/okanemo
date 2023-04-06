<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\Category\CategoryInterface;

class CategoryImplement implements CategoryInterface
{
    protected $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function getList()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($attributes)
    {
        return $this->model->create([
            'name' => $attributes['name']
        ]);
    }

    public function update($id, $attributes)
    {
        $data = $this->getById($id);
        $data->update([
            'name' => $attributes['name']
        ]);
        return $data;
    }

    public function delete($id)
    {
        $data = $this->getById($id);
        return $data->delete();
    }
}

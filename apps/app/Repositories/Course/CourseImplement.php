<?php

namespace App\Repositories\Course;

use App\Models\Course;
use App\Repositories\Course\CourseInterface;

class CourseImplement implements CourseInterface
{
    protected $model;

    public function __construct(Course $model)
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
            'name' => $attributes['name'],
            'category_id' => $attributes['category_id'],
            'type' => $attributes['type'],
            'description' => $attributes['description'],
        ]);
    }

    public function update($id, $attributes)
    {
        $data = $this->getById($id);
        $data->update([
            'name' => $attributes['name'],
            'category_id' => $attributes['category_id'],
            'type' => $attributes['type'],
            'description' => $attributes['description'],
        ]);
        return $data;
    }

    public function delete($id)
    {
        $data = $this->getById($id);
        return $data->delete();
    }
}

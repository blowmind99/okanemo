<?php

namespace App\Repositories\Enrollment;

use App\Models\Enrollment;
use App\Repositories\Enrollment\EnrollmentInterface;

class EnrollmentImplement implements EnrollmentInterface
{
    protected $model;

    public function __construct(Enrollment $model)
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
        foreach($attributes['users'] as $user_id) {
            $this->model::create([
                'user_id' => $user_id,
                'course_id' => $attributes['course']
            ]);
        }
    }

    public function delete($id)
    {
        $data = $this->getById($id);
        return $data->delete();
    }
}

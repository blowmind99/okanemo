<?php

namespace App\Repositories\Enrollment;

interface EnrollmentInterface
{
    public function getList();
    public function getById($id);
    public function create($attributes);
    public function delete($id);
}

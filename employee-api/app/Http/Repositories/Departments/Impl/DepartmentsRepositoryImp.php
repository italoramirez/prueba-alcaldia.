<?php

namespace App\Http\Repositories\Departments\Impl;

use App\Http\DataTransferObjects\Departments\DepartmentsData;
use App\Http\Repositories\Departments\DepartmentsRepository;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class DepartmentsRepositoryImp implements DepartmentsRepository
{

    public function save(DepartmentsData $data): Department
    {
        $department = new Department();
        $department->name = $data->name;
        $department->save();
        return $department;
    }

    public function getAll(): Model|Collection
    {
        return Department::select(['id', 'name'])->get();
    }

    public function update(DepartmentsData $data, int $id): Model
    {
        $department = $this->getById($id);
        $department->name = $data->name;
        $department->update();
        return $department;
    }

    public function delete(int $id): void
    {
        $department = $this->getById($id);
        $department->delete();
    }

    public function getById(int $id): Model
    {
        return Department::findOrFail($id);
    }
}
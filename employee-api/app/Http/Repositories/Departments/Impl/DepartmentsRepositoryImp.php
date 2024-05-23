<?php

namespace App\Http\Repositories\Departments\Impl;

use App\Http\DataTransferObjects\Departments\DepartmentsData;
use App\Http\Repositories\Departments\DepartmentsRepository;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class DepartmentsRepositoryImp implements DepartmentsRepository
{

    /**
     * @param DepartmentsData $data
     * @return Department
     */
    public function save(DepartmentsData $data): Department
    {
        $department = new Department();
        $department->name = $data->name;
        $department->save();
        return $department;
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Department::all(['id', 'name']);
    }

    /**
     * @param DepartmentsData $data
     * @param int $id
     * @return Model
     */
    public function update(DepartmentsData $data, int $id): Model
    {
        $department = $this->getById($id);
        $department->name = $data->name;
        $department->update();
        return $department;
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        $department = $this->getById($id);
        $department->delete();
    }

    /**
     * @param int $id
     * @return Model
     */
    public function getById(int $id): Model
    {
        return Department::findOrFail($id);
    }
}
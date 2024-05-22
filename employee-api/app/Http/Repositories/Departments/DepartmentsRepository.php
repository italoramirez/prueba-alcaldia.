<?php

namespace App\Http\Repositories\Departments;

use App\Http\DataTransferObjects\Departments\DepartmentsData;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface DepartmentsRepository
{
    /**
     * @param DepartmentsData $data
     * @return Department
     */
    public function save(DepartmentsData $data): Department;

    /**
     * @return Collection|Model
     */
    public function getAll(): Collection|Model;

    public function update(DepartmentsData $data, int $id): Model;

    public function delete(int $id): void;

    public function getById(int $id): Model;
}
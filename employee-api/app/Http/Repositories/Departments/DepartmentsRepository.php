<?php

namespace App\Http\Repositories\Departments;

use App\Http\DataTransferObjects\Departments\DepartmentsData;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

interface DepartmentsRepository
{
    /**
     * @param DepartmentsData $data
     * @return Department
     */
    public function save(DepartmentsData $data): Department;

    /**
     * @return Collection
     */
    public function getAll(): Collection;

    public function update(DepartmentsData $data, int $id): Model;

    public function delete(int $id): void;

    public function getById(int $id): Model;
}
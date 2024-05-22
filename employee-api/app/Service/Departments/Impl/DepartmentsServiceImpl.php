<?php

namespace App\Service\Departments\Impl;

use App\Http\DataTransferObjects\Departments\DepartmentsData;
use App\Http\Repositories\Departments\Impl\DepartmentsRepositoryImp;
use App\Models\Department;
use App\Service\Departments\DepartmentsService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class DepartmentsServiceImpl implements DepartmentsService
{


    public function __construct(protected DepartmentsRepositoryImp $departmentsRepository)
    {
    }

    public function save(DepartmentsData $data): Department
    {
        return $this->departmentsRepository->save($data);
    }

    public function getAll(): Model|Collection
    {
        return $this->departmentsRepository->getAll();
    }

    public function update(DepartmentsData $data, int $id): Model
    {
        return $this->departmentsRepository->update($data, $id);
    }

    public function delete(int $id): void
    {
        $this->departmentsRepository->delete($id);
    }
}
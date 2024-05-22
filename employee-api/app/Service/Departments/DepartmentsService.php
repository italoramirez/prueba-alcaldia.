<?php

namespace App\Service\Departments;

use App\Http\DataTransferObjects\Departments\DepartmentsData;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface DepartmentsService
{
    /**
     * @param DepartmentsData $data
     * @return Model
     */
    public function save (DepartmentsData $data): Model;

    /**
     * @return Model|Collection
     */
    public function getAll(): Model|Collection;

    /**
     * @param DepartmentsData $data
     * @param int $id
     * @return Model
     */
    public function update(DepartmentsData $data, int $id): Model;

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void;
}
<?php

namespace App\Builders\Users;

use Illuminate\Database\Eloquent\Builder;

class UserBuilder extends Builder
{
    /**
     * @param string|null $name
     * @return self
     */
    public function whereName(?string $name): self
    {
        return $this->when(isset($name), function ($q) use ($name) {
            $q->where('name', 'like', '%' . $name . '%');
        });
    }

    /**
     * @param int|null $departmentId
     * @return self
     */
    public function whereDepartmentById(?int $departmentId): self
    {
        return $this->when(isset($departmentId), function ($q) use ($departmentId) {
            $q->where('department_id', 'like', '%' . $departmentId . '%');
        });
    }
}
<?php

namespace App\Http\Controllers\Departments;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\Departments\DepartmentsData;
use App\Service\Departments\DepartmentsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DepartmentsController extends Controller
{
    public function __construct(protected DepartmentsService $departmentsService)
    {
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
       return response()->json($this->departmentsService->getAll(), Response::HTTP_OK);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json($this->departmentsService->save(DepartmentsData::from($request->all()), Response::HTTP_CREATED));
    }

    /**
     * @param Request $request
     * @param int $id
     * @return Model
     */
    public function update(Request $request, int $id): Model
    {
        return $this->departmentsService->update(DepartmentsData::from($request->all()), $id);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->departmentsService->delete($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

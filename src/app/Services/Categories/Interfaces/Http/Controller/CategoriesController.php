<?php

namespace App\Services\Categories\Interfaces\Http\Controller;

use App\Services\Categories\Interfaces\Http\Resources\CategoryResource;
use Illuminate\Http\JsonResponse;
use Keerill\Categories\Contracts\GetCategoryByIdInterface;

final class CategoriesController
{
    public function get(GetCategoryByIdInterface $subservice, int $categoryId): JsonResponse
    {
        $categoryData = $subservice->getCategoryById($categoryId);

        return response()
            ->json(['data' => new CategoryResource($categoryData)]);
    }
}

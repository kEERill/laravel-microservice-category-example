<?php

namespace App\Services\Categories\Interfaces\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Keerill\CategoriesInfrastructure\DataTransferObjects\CategoryData;

final class CategoryResource extends JsonResource
{
    public function __construct(CategoryData $resource)
    {
        parent::__construct($resource);
    }
}

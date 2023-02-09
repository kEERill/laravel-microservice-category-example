<?php

namespace Keerill\CategoriesInfrastructure\Contracts;

use Keerill\CategoriesInfrastructure\DataTransferObjects\CategoryData;

interface GetCategoryByIdInterface
{
    public function getCategoryById(int $categoryId): CategoryData;
}

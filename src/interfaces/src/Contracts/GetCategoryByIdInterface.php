<?php

namespace Keerill\Categories\Contracts;

use Keerill\Categories\DataTransferObjects\CategoryData;

interface GetCategoryByIdInterface
{
    public function getCategoryById(int $categoryId): CategoryData;
}

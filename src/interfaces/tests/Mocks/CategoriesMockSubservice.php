<?php

namespace Keerill\Categories\Tests\Mocks;

use Keerill\Categories\Contracts\GetCategoryByIdInterface;
use Keerill\Categories\DataTransferObjects\CategoryData;

final class CategoriesMockSubservice implements GetCategoryByIdInterface
{
    public function getCategoryById(int $categoryId): CategoryData
    {
        return new CategoryData('Тестовая категория', $categoryId);
    }
}

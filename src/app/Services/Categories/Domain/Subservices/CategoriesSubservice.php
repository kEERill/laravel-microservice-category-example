<?php

namespace App\Services\Categories\Domain\Subservices;

use Keerill\CategoriesInfrastructure\Contracts\GetCategoryByIdInterface;
use Keerill\CategoriesInfrastructure\DataTransferObjects\CategoryData;
use Micromus\MicroserviceStructure\Attributes\RegisterAction;

final class CategoriesSubservice implements GetCategoryByIdInterface
{
    #[RegisterAction(GetCategoryByIdInterface::class)]
    public function getCategoryById(int $categoryId): CategoryData
    {
        return new CategoryData('Тестовая категория', $categoryId);
    }
}

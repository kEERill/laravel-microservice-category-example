<?php

namespace App\Services\Categories\Domain\Subservices;

use Keerill\Categories\Contracts\GetCategoryByIdInterface;
use Keerill\Categories\DataTransferObjects\CategoryData;
use Micromus\MicroserviceStructure\Attributes\RegisterAction;

final class CategoriesSubservice implements GetCategoryByIdInterface
{
    #[RegisterAction(GetCategoryByIdInterface::class)]
    public function getCategoryById(int $categoryId): CategoryData
    {
        return new CategoryData('Тестовая категория', $categoryId);
    }
}

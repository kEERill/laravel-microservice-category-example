<?php

namespace Keerill\Categories\Subservices;

use Illuminate\Support\Facades\Http;
use Keerill\Categories\Contracts\GetCategoryByIdInterface;
use Keerill\Categories\DataTransferObjects\CategoryData;
use Micromus\MicroserviceStructure\Attributes\RegisterAction;

final class CategoriesSubservice
    implements GetCategoryByIdInterface
{
    private function getUrl(): string
    {
        return (string) config('services.categories.host');
    }

    #[RegisterAction(GetCategoryByIdInterface::class)]
    public function getCategoryById(int $categoryId): CategoryData
    {
        $categoryResponse = Http::baseUrl($this->getUrl())
            ->get("/v1/infrastructure/$categoryId")
            ->json('data');

        return CategoryData::from($categoryResponse);
    }
}

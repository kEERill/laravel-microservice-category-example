<?php

namespace Keerill\CategoriesInfrastructure\Tests;

use Illuminate\Support\Facades\Http;
use Keerill\CategoriesInfrastructure\DataTransferObjects\CategoryData;
use Keerill\CategoriesInfrastructure\Subservices\CategoriesSubservice;
use Tests\TestCase;

final class CategoriesSubserviceTest extends TestCase
{
    public function test_get_category_by_id(): void
    {
        Http::fake([
            '*' => Http::response(['data' => ['id' => 1, 'title' => 'Тестовое название']])
        ]);

        /** @var CategoryData $categoryData */
        $categoryData = $this->app->make(CategoriesSubservice::class)
            ->getCategoryById(1);

        $this->assertEquals(1, $categoryData->id);
        $this->assertEquals('Тестовое название', $categoryData->title);
    }
}

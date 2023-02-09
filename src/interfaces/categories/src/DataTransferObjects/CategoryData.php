<?php

namespace Keerill\CategoriesInfrastructure\DataTransferObjects;

use Spatie\LaravelData\Data;

final class CategoryData extends Data
{
    public function __construct(
        public string $title,
        public int $id = -1
    ) {}
}

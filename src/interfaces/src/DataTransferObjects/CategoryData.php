<?php

namespace Keerill\Categories\DataTransferObjects;

use Spatie\LaravelData\Data;

final class CategoryData extends Data
{
    public function __construct(
        public string $title,
        public int $id = -1
    ) {}
}

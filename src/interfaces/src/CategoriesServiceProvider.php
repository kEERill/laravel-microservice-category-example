<?php

namespace Keerill\Categories;

use Micromus\MicroserviceStructure\Services\AbstractServiceProvider;
use Micromus\MicroserviceStructure\Services\ServiceConfigurator;

final class CategoriesServiceProvider extends AbstractServiceProvider
{

    protected function configureService(ServiceConfigurator $serviceConfigurator): void
    {
        $serviceConfigurator
            ->setSubserviceNamespace('Subservices')
            ->usingConfig('categories');
    }
}

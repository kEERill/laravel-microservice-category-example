<?php

namespace Keerill\CategoriesInfrastructure;

use Micromus\MicroserviceStructure\Services\AbstractServiceProvider;
use Micromus\MicroserviceStructure\Services\ServiceConfigurator;

final class CategoriesServiceProvider extends AbstractServiceProvider
{

    protected function configureService(ServiceConfigurator $serviceConfigurator): void
    {
        $serviceConfigurator
            ->usingConfig('categories');
    }
}

<?php

declare(strict_types=1);

use Rector\Nette\Rector\MethodCall\SetClassWithArgumentToSetFactoryRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/../../../../../../config/config.php');
    $services = $containerConfigurator->services();

    $services->set(SetClassWithArgumentToSetFactoryRector::class);
};

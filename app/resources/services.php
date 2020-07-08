<?php
declare(strict_types=1);

use App\Domain\Services\MailService;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        MailService::class => \DI\autowire(MailService::class),
    ]);
};
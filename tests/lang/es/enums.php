<?php declare(strict_types=1);

use Arslan\Enum\Tests\Enums\UserTypeLocalized;

return [
    UserTypeLocalized::class => [
        UserTypeLocalized::Administrator => 'Administrador',
        UserTypeLocalized::SuperAdministrator => 'Súper administrador',
    ],
];

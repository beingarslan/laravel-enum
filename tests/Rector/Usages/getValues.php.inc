<?php

use Arslan\Enum\Tests\Enums\UserType;

UserType::getValues();
-----
<?php

use Arslan\Enum\Tests\Enums\UserType;

array_map(static fn(UserType $userType) => $userType->value, UserType::cases());

<?php

use Arslan\Enum\Tests\Enums\UserType;

UserType::getRandomInstance();
-----
<?php

use Arslan\Enum\Tests\Enums\UserType;

fake()->randomElement(UserType::cases());

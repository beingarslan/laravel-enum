<?php

use Arslan\Enum\Tests\Enums\UserType;

UserType::fromValue('foo');
UserType::fromValue(UserType::Administrator);
UserType::fromValue(...);
-----
<?php

use Arslan\Enum\Tests\Enums\UserType;

UserType::from('foo');
UserType::Administrator;
UserType::from(...);

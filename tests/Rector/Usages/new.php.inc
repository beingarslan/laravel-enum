<?php

use Arslan\Enum\Tests\Enums\UserType;

new UserType('foo');
new UserType(UserType::Administrator);
-----
<?php

use Arslan\Enum\Tests\Enums\UserType;

UserType::from('foo');
UserType::Administrator;

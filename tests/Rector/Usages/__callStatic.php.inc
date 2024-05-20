<?php

use Arslan\Enum\Tests\Enums\UserType;

UserType::Administrator();
UserType::NotAnEnumCase();
-----
<?php

use Arslan\Enum\Tests\Enums\UserType;

UserType::Administrator;
UserType::NotAnEnumCase();

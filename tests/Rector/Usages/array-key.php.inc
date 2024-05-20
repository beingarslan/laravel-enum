<?php

use Arslan\Enum\Tests\Enums\UserType;
/** @var UserType $userType */

[$userType->value => null];
[UserType::Administrator => null];
-----
<?php

use Arslan\Enum\Tests\Enums\UserType;
/** @var UserType $userType */

[$userType->value => null];
[UserType::Administrator->value => null];

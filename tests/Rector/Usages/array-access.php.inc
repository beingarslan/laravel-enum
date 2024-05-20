<?php

use Arslan\Enum\Tests\Enums\UserType;

/** @var UserType $userType */

$a = [];
$a[$userType];
$a[UserType::Administrator];
-----
<?php

use Arslan\Enum\Tests\Enums\UserType;

/** @var UserType $userType */

$a = [];
$a[$userType->value];
$a[UserType::Administrator->value];

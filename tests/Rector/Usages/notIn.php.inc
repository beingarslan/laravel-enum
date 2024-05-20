<?php

use Arslan\Enum\Tests\Enums\UserType;

/** @var UserType $userType */
$userType->notIn([UserType::Administrator]);
$userType?->notIn([UserType::Administrator, $userType]);
-----
<?php

use Arslan\Enum\Tests\Enums\UserType;

/** @var UserType $userType */
!in_array($userType, [UserType::Administrator]);
!in_array($userType, [UserType::Administrator, $userType]);

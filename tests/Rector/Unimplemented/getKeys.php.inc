<?php

use Arslan\Enum\Tests\Enums\UserType;

UserType::getKeys(UserType::Administrator, UserType::Moderator);
UserType::getKeys([UserType::Administrator, UserType::Moderator]);
-----
<?php

use Arslan\Enum\Tests\Enums\UserType;

[\Arslan\Enum\Tests\Enums\UserType::Administrator->name, \Arslan\Enum\Tests\Enums\UserType::Moderator->name];
[\Arslan\Enum\Tests\Enums\UserType::Administrator->name, \Arslan\Enum\Tests\Enums\UserType::Moderator->name];

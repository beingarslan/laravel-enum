<?php

use Arslan\Enum\Tests\Enums\UserType;

function foo(string $a = UserType::Administrator) {}
-----
<?php

use Arslan\Enum\Tests\Enums\UserType;

function foo(string $a = UserType::Administrator->value) {}

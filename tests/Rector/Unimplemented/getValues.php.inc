<?php

use Arslan\Enum\Tests\Enums\UserType;

UserType::getValues('Administrator', UserType::Moderator()->key);
-----
<?php

use Arslan\Enum\Tests\Enums\UserType;

?

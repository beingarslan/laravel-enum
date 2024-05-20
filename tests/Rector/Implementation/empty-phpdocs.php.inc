<?php

use Arslan\Enum\Enum;

/**
 * @method static static BAR()
 * @method static static BAZ()
 *
 * @extends Enum<int>
 */
class Foo extends Enum
{
    const BAR = 1;
}
-----
<?php

use Arslan\Enum\Enum;

enum Foo : int
{
    case BAR = 1;
}

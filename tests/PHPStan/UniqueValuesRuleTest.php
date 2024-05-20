<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\PHPStan;

use Arslan\Enum\PHPStan\UniqueValuesRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/** @extends RuleTestCase<UniqueValuesRule> */
final class UniqueValuesRuleTest extends RuleTestCase
{
    protected function getRule(): Rule
    {
        return new UniqueValuesRule();
    }

    public function testRule(): void
    {
        $this->analyse(
            [
                __DIR__ . '/Fixtures/DuplicateValue.php',
            ],
            [
                [
                    'Enum class Arslan\Enum\Tests\PHPStan\Fixtures\DuplicateValue contains constants with duplicate values: [["A","B"]].',
                    13,
                ],
            ],
        );
    }
}

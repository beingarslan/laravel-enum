<?php declare(strict_types=1);

namespace Arslan\Enum\Tests;

use Arslan\Enum\Rules\EnumKey;
use Arslan\Enum\Rules\EnumValue;
use Arslan\Enum\Tests\Enums\UserType;
use Arslan\Enum\Tests\Enums\UserTypeLocalized;

final class EnumLocalizationTest extends ApplicationTestCase
{
    public function testEnumGetDescriptionWithLocalization(): void
    {
        $this->app->setLocale('en');
        $this->assertSame('Super administrator', UserTypeLocalized::getDescription(UserTypeLocalized::SuperAdministrator));

        $this->app->setLocale('es');
        $this->assertSame('Súper administrador', UserTypeLocalized::getDescription(UserTypeLocalized::SuperAdministrator));
    }

    public function testEnumGetDescriptionForMissingLocalizationKey(): void
    {
        $this->app->setLocale('en');
        $this->assertSame('Moderator', UserTypeLocalized::getDescription(UserTypeLocalized::Moderator));

        $this->app->setLocale('es');
        $this->assertSame('Moderator', UserTypeLocalized::getDescription(UserTypeLocalized::Moderator));
    }

    public function testCanLocalizeValidationErrorMessageUsingClassRule(): void
    {
        $validator = $this->app['validator'];

        $this->assertSame(
            'The value you have entered is invalid.',
            $validator->make(['input' => 'test'], ['input' => new EnumValue(UserType::class)])->errors()->first()
        );
        $this->assertSame(
            'Wrong key.',
            $validator->make(['input' => 'test'], ['input' => new EnumKey(UserType::class)])->errors()->first()
        );

        $this->app->setLocale('es');

        $this->assertSame(
            'The value you have entered is invalid.', // No Spanish translations out of the box
            $validator->make(['input' => 'test'], ['input' => new EnumValue(UserType::class)])->errors()->first()
        );
        $this->assertSame(
            'Llave incorrecta.',
            $validator->make(['input' => 'test'], ['input' => new EnumKey(UserType::class)])->errors()->first()
        );
    }

    public function testCanLocalizeValidationErrorMessageUsingStringRule(): void
    {
        $validator = $this->app['validator'];

        $this->assertSame(
            'The value you have entered is invalid.',
            $validator->make(['input' => 'test'], ['input' => 'enum_value:Arslan\Enum\Tests\Enums\UserType'])->errors()->first()
        );
        $this->assertSame(
            'Wrong key.',
            $validator->make(['input' => 'test'], ['input' => 'enum_key:Arslan\Enum\Tests\Enums\UserType'])->errors()->first()
        );

        $this->app->setLocale('es');

        $this->assertSame(
            'The value you have entered is invalid.', // No Spanish translations out of the box
            $validator->make(['input' => 'test'], ['input' => 'enum_value:Arslan\Enum\Tests\Enums\UserType'])->errors()->first()
        );
        $this->assertSame(
            'Llave incorrecta.',
            $validator->make(['input' => 'test'], ['input' => 'enum_key:Arslan\Enum\Tests\Enums\UserType'])->errors()->first()
        );
    }
}

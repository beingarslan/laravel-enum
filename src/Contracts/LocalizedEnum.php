<?php declare(strict_types=1);

namespace Arslan\Enum\Contracts;

interface LocalizedEnum
{
    /** Get the default localization key. */
    public static function getLocalizationKey(): string;
}

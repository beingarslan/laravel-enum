<?php declare(strict_types=1);

use Arslan\Enum\Rector\ToNativeUsagesRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ToNativeUsagesRector::class);
};

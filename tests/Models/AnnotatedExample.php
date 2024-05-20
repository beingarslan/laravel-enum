<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Models;

use Arslan\Enum\Tests\Enums\UserType;
use Illuminate\Database\Eloquent\Model;

/**
 * Description should be kept.
 *
 * @property \Arslan\Enum\Tests\Enums\UserType|null $user_type
 *
 * @see https://github.com/Arslan/laravel-enum/pull/71
 */
class AnnotatedExample extends Model
{
    protected $casts = [
        'user_type' => UserType::class,
    ];

    protected $fillable = [
        'user_type',
    ];
}

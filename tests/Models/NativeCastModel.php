<?php declare(strict_types=1);

namespace Arslan\Enum\Tests\Models;

use Arslan\Enum\Tests\Enums\UserType;
use Arslan\Enum\Tests\Enums\UserTypeCustomCast;
use Illuminate\Database\Eloquent\Model;

/**
 * @property UserType|null $user_type
 * @property UserTypeCustomCast $user_type_custom
 */
class NativeCastModel extends Model
{
    protected $casts = [
        'user_type' => UserType::class,
        'user_type_custom' => UserTypeCustomCast::class,
    ];

    protected $fillable = [
        'user_type',
        'user_type_custom',
    ];
}

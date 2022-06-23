<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    const PLATFORM_GOOGLE   = 1;
    const PLATFORM_FACEBOOK = 2;

    const TYPE_LIST = [
        self::PLATFORM_GOOGLE   => 'Google',
        self::PLATFORM_FACEBOOK => 'Facebook',
    ];
}

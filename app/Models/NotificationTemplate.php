<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationTemplate extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'notification_template_id';

    const NOTIFICATION_TYPE_EMAIL = 1;
    const NOTIFICATION_TYPE_SMS   = 2;
    const NOTIFICATION_TYPE_BOTH  = 3;

    const NOTIFICATION_TYPE_LIST = [
        self::NOTIFICATION_TYPE_EMAIL => 'Email',
        self::NOTIFICATION_TYPE_SMS   => 'SMS',
        self::NOTIFICATION_TYPE_BOTH  => 'Both',
    ];
}

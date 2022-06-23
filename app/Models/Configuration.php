<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'configuration_id';

    const TYPE_PAYPAL_CONFIGURATION       = 1;
    const TYPE_TWILIO_CONFIGURATION       = 2;
    const TYPE_GOOGLE_CONFIGURATION       = 3;
    const TYPE_FACEBOOK_CONFIGURATION     = 4;

    const TYPE_LIST = [
        self::TYPE_PAYPAL_CONFIGURATION       => 'PayPal Configuration',
        self::TYPE_TWILIO_CONFIGURATION       => 'Twilio Configuration',
        self::TYPE_GOOGLE_CONFIGURATION       => 'Google Configuration',
        self::TYPE_FACEBOOK_CONFIGURATION     => 'Facebook Configuration',
    ];
}

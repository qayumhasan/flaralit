<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Uuids
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }
    /**
     * Get the value indicating whether the IDs are incrementing.
     * 
     * @return bool
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * Get The auto-incrementing key type.
     * 
     * @return bool
     */
    public function getKeyType()
    {
        return 'string';
    }
}

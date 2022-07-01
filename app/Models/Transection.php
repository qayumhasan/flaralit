<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transection extends Model
{
    protected $fillable = [
        'token',
        'user_id',
        'payment_type',
        'amount',
    ];
    use HasFactory;
}

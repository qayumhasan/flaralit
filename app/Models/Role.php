<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'role_id';

    const SUPERADMIN = 1;
    const ADMIN      = 2;
    const VENDOR     = 3;
    const CUSTOMER   = 4;
    const BLOGGER    = 5;

    const ROLE_LIST = [
        self::SUPERADMIN => 'SuperAdmin',
        self::ADMIN      => 'Admin',
        self::VENDOR     => 'Vendor',
        self::CUSTOMER   => 'Customer',
        self::BLOGGER    => 'Blogger',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_roles', 'role_id', 'permission_id');
    }

}

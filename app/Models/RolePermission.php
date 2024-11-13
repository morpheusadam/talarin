<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Models\Auth\Database\Factories\RolePermissionFactory;

class RolePermission extends Model
{
    use HasFactory;

    protected $fillable = ['role_id', 'permission_id'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}

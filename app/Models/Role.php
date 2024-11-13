<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Models\Auth\Database\Factories\RoleFactory;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['role_name', 'description'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles');
    }
}

<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Models\Auth\Database\Factories\UserRoleFactory;

class UserRole extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'role_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}

<?php
// Models/Auth/app/Models/User.php

namespace App\Models;

use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Role; // Ensure this import is correct

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id', // Ensure this is provided or nullable
        'company_name',
        'website',
        'address',
        'logo',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    /**
     * Get the role associated with the user.
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the role ID by role name.
     *
     * @param string $roleName
     * @return int|null
     */
    public static function getRoleIdByName(string $roleName): ?int
    {
        $role = Role::where('name', $roleName)->first();
        return $role ? $role->id : null;
    }

    public function isAdmin(): bool
    {
        return $this->role && $this->role->name === 'admin';
    }

    /**
     * Check if the user is a client.
     *
     * @return bool
     */
    public function isClient(): bool
    {
        return $this->role && $this->role->name === 'client';
    }

    /**
     * Check if the user is a vendor.
     *
     * @return bool
     */
    public function isVendor(): bool
    {
        return $this->role && $this->role->name === 'vendor';
    }
}
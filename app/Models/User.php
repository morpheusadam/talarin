<?php
// Models/Auth/app/Models/User.php

namespace App\Models;
use Filament\Panel;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Role; // Ensure this import is correct

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'company_name',
        'website',
        'address',
        'logo',
    ];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The roles that belong to the user.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    /**
     * Check if the user has a specific role.
     *
     * @param string $roleName
     * @return bool
     */
    public function hasRole(string $roleName): bool
    {
        return $this->roles()
            ->where('role_name', $roleName)
            ->exists();
    }

    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    public function isVendor(): bool
    {
        return $this->hasRole('vendor');
    }

    public function isClient(): bool
    {
        return $this->hasRole('client');
    }
    public function canAccessPanel(Panel $panel): bool
    {
        return $panel->getId() === 'admin' && $this->isAdmin();
    }
}


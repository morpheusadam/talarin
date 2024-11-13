<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Auth\Database\Factories\UserMetaFactory;

class UserMeta extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'meta_key', 'meta_value'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

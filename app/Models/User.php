<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'age',
        'language_proficiency',
        'location',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders()  : HasMany
    {
        return $this->hasMany(Order::class,'customer_id');
    }

    public function scopeFilter($query, array $filters)
    {
        foreach ($filters as $field => $value) {
            switch ($field) {
                case 'name':
                case 'email':
                case 'age':
                case 'language_proficiency':
                case 'location':
                case 'role':
   
                $query->where($field, $value);
                    break;
                default:
                    // unsupported filter field, ignore it
                    break;
            }
        }
        return $query;
    }
}

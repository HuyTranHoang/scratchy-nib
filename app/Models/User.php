<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio',
        'facebook',
        'twitter',
        'avatar',
        'role_id'
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

    public function isAdmin()
    {
        return $this->role_id === 1;
    }

    public function feedback(): HasMany
    {
        return $this->hasMany(Feedback::class, 'user_id');
    }
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function scopeFilter($query, array $filters) {
        if($filters['userFilter'] ?? false) {
            $query->where('name','like','%'.$filters['userFilter'].'%')
                ->orWhere('email','like','%'.$filters['userFilter'].'%');
        }

        if($filters['orderby'] ?? false) {
            if ($filters['orderby'] == 'name'){
                $query->orderBy('name',$filters['sort']);
            } else {
                $query->orderBy('created_at',$filters['sort']);
            }
        }

        if($filters['roleID'] ?? false) {
            $query->where('role_id',$filters['roleID']);
        }
    }
}

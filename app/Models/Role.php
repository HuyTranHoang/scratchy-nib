<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'role_id';
    protected $fillable = ['role_name'];

    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'role_id');
    }

    public function scopeFilter($query, array $filters) {
        if($filters['roleName'] ?? false) {
            $query->where('role_name','like','%'.request('roleName').'%');
        }
    }

}

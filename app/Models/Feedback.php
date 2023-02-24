<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{
    use HasFactory;
    protected $primaryKey = 'feedback_id';
    protected $table = 'feedback';

    public function calligraphy(): BelongsTo
    {
        return $this->belongsTo(Calligraphy::class,'calligraphy_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}

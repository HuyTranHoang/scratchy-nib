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

    protected $fillable = ['feedback_message','user_id','calligraphy_id'];

    public function calligraphy(): BelongsTo
    {
        return $this->belongsTo(Calligraphy::class, 'calligraphy_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters) {
        if($filters['feedbackFilter'] ?? false) {
            $query->whereIn('user_id',function ($query) use ($filters) {
                $query->select('user_id')->from('users')
                    ->where('name','like','%'.$filters['feedbackFilter'].'%');
            })
                ->orWhere('feedback_message','like','%'.$filters['feedbackFilter'].'%');
        }

        if($filters['orderby'] ?? false) {
            if ($filters['orderby'] == 'userid'){
                $query->orderBy('user_id',$filters['sort']);
            } else {
                $query->orderBy('created_at',$filters['sort']);
            }
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CalligraphyStyle extends Model
{
    use HasFactory;

    protected $primaryKey = 'style_id';

    protected $table = 'calliraphy_styles';
    protected $fillable = ['style_name','style_description','style_image','category_id'];

    public function calligraphyCategory(): BelongsTo
    {
        return $this->belongsTo(CalligraphyCategory::class, 'category_id');
    }

    public function calligraphy(): HasMany
    {
        return $this->hasMany(Calligraphy::class, 'style_id');
    }

    public function scopeFilter($query, array $filters) {
        if($filters['styleName'] ?? false) {
            $query->where('style_name','like','%'.$filters['styleName'].'%');
        }
        if($filters['cateID'] ?? false) {
            $query->where('category_id',$filters['cateID']);
        }
        if($filters['orderby'] ?? false) {
            if ($filters['orderby'] == 'name'){
                $query->orderBy('style_name',$filters['sort']);
            } else {
                $query->orderBy('created_at',$filters['sort']);
            }
        }
    }
}

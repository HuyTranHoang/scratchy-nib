<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CalligraphyCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';

    protected $table = 'calligraphy_categories';

    protected $fillable = ['category_name', 'category_description','category_image'];

    public function calligraphyStyle(): HasMany
    {
        return $this->hasMany(CalligraphyStyle::class, 'category_id');
    }

    public function scopeFilter($query, array $filters) {
        if($filters['cateName'] ?? false) {
            $query->where('category_name','like','%'.$filters['cateName'].'%');
        }
        if($filters['orderby'] ?? false) {
            if ($filters['orderby'] == 'name'){
                $query->orderBy('category_name',$filters['sort']);
            } else {
                $query->orderBy('created_at',$filters['sort']);
            }
        }
    }

}

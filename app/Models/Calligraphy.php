<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Calligraphy extends Model
{
    use HasFactory;

    protected $primaryKey = 'calligraphy_id';

    protected $table = 'calligraphies';

    protected $fillable = ['calligraphy_name','calligraphy_description','style_id'];

    public function calligraphyStyle(): BelongsTo
    {
        return $this->belongsTo(CalligraphyStyle::class, 'style_id');
    }

    public function galleryImage(): HasMany
    {
        return $this->hasMany(GalleryImage::class, 'calligraphy_id');
    }

    public function feedback(): HasMany
    {
        return $this->hasMany(Feedback::class, 'calligraphy_id');
    }

    public function scopeFilter($query, array $filters) {
        if($filters['calligraphyName'] ?? false) {
            $query->where('calligraphy_name','like','%'.request('calligraphyName').'%');
        }
        if($filters['styleID'] ?? false) {
            $query->where('style_id',request('styleID'));
        }
    }
}

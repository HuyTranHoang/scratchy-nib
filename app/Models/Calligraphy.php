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

    public function calligraphyStyle(): BelongsTo
    {
        return $this->belongsTo(CalligraphyStyle::class,'style_id');
    }

    public function galleryImage(): HasMany
    {
        return $this->hasMany(GalleryImage::class,'calligraphy_id');
    }

    public function feedback(): HasMany
    {
        return $this->hasMany(Feedback::class,'calligraphy_id');
    }
}

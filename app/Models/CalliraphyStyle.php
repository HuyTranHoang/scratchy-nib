<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CalliraphyStyle extends Model
{
    use HasFactory;
    protected $primaryKey = 'style_id';
    protected $table = 'calliraphy_styles';

    public function calligraphyCategory(): BelongsTo
    {
        return $this->belongsTo(CalligraphyCategory::class,'category_id');
    }

    public function galleryImage(): HasMany
    {
        return $this->hasMany(GalleryImage::class,'style_id');
    }

    public function calligraphy(): HasMany
    {
        return $this->hasMany(Calligraphy::class,'style_id');
    }
}

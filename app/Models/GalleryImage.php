<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GalleryImage extends Model
{
    use HasFactory;
    protected $primaryKey = 'image_id';
    protected $table = 'gallery_images';

    public function calligraphy(): BelongsTo
    {
        return $this->belongsTo(Calligraphy::class,'calligraphy_id');
    }
}

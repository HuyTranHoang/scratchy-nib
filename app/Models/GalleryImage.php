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

    protected $fillable = ['image_name','image_description','calligraphy_id'];

    public function calligraphy(): BelongsTo
    {
        return $this->belongsTo(Calligraphy::class, 'calligraphy_id');
    }

    public function scopeFilter($query, array $filters) {
        $query->join('calligraphies', 'gallery_images.calligraphy_id', '=', 'calligraphies.calligraphy_id');

        if ($filters['cateID'] ?? false) {
            $query->whereHas('calligraphy.CalligraphyStyle.CalligraphyCategory', function ($query) use ($filters) {
                $query->where('category_id', $filters['cateID'])
                    ->when($filters['styleID'] ?? false, function ($query) use ($filters) {
                        $query->where('style_id', $filters['styleID']);
                    })
                    ->when($filters['calliName'] ?? false, function ($query) use ($filters) {
                        $query->where('calligraphy_name', 'like', '%' . $filters['calliName'] . '%');
                    });
            });
        }

        if ($filters['calliName'] ?? false) {
            $query->where('calligraphy_name', 'like', '%' . $filters['calliName'] . '%');
        }

        if ($filters['styleID'] ?? false) {
            $query->where('style_id', $filters['styleID']);
        }

        if ($filters['sort'] ?? false) {
            $query->orderBy('calligraphies.calligraphy_id', $filters['sort']);
        }
    }
}

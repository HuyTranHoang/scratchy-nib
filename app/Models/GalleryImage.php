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

        if($filters['cateID'] ?? false) {
            if($filters['styleID'] ?? false) {
                $query->whereHas('calligraphy.CalligraphyStyle', function ($query) {
                    $query->where('style_id', '=', request()->styleID);
                });
            }

            if($filters['calliName'] ?? false) {
                $query->whereHas('calligraphy', function ($query) {
                    $query->where('calligraphy_name', 'like','%'.request()->calliName.'%');
                });
            }

            $query->whereHas('calligraphy.CalligraphyStyle.CalligraphyCategory', function($query) {
                $query->where('category_id', '=', request()->cateID);
            })
                ->join('calligraphies', 'gallery_images.calligraphy_id', '=', 'calligraphies.calligraphy_id');
        } else {
            if(($filters['calliName'] ?? false)) {
                $query->whereIn('calligraphy_id',function ($query) {
                    $query->select('calligraphy_id')->from('calligraphies')
                        ->where('calligraphy_name','like','%'.request()->calliName.'%');
                });;
            }

            if($filters['styleID'] ?? false ) {
                $query->whereIn('calligraphy_id',function ($query) {
                    $query->select('calligraphy_id')->from('calligraphies')
                        ->where('style_id',request()->styleID);
                });
            }
        }

    }
}

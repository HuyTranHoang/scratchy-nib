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

    public function calligraphyStyle(): HasMany
    {
        return $this->hasMany(CalliraphyStyle::class,'category_id');
    }

}

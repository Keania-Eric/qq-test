<?php

namespace App\Models;

use App\Models\MovieVersion;
use App\Models\MovieVersionCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;


    protected $guarded = [];

    
    /**
     * Get hot movies trending 
     *
     * @param $query $query [explicite description]
     *
     * @return void
     */
    public function scopeHot($query)
    {
        return $query->whereStatus(1);
    }

    
    /**
     * Movies coming soon
     *
     * @param $query $query [explicite description]
     *
     * @return void
     */
    public function scopeSoon($query)
    {
        return $query->whereStatus(2);
    }

    
    /**
     * Different movie versions
     *
     * @return void
     */
    public function versions()
    {
        return $this->hasMany(MovieVersion::class);
    }
    
    /**
     * Movie version categories available for this movie
     *
     * @return void
     */
    public function version_categories()
    {
        $ids = $this->versions->pluck('movie_category_id')->unique()->all();
        return MovieVersionCategory::find($ids);
    }
}

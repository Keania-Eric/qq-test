<?php

namespace App\Models;

use App\Models\Venue;
use App\Models\MovieVersionCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MovieVersion extends Model
{
    use HasFactory;

    
    /**
     * Category of the movie
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(MovieVersionCategory::class);
    }
    
    /**
     * Venue of this movie version
     *
     * @return void
     */
    public function venue()
    {
        return $this->belongsToOne(Venue::class);
    }
}

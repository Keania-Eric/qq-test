<?php

namespace App\Models;

use App\Models\MovieVersion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MovieVersionCategory extends Model
{
    use HasFactory;

    
    /**
     * Different versions of a movie like digital versions etc
     *
     * @return void
     */
    public function versions()
    {
        return $this->hasMany(MovieVersion::class, 'movie_category_id');
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MovieCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'actors'=> $this->stringify($this->actors),
            'rating'=> $this->avg_rating,
            'tags'=> $this->tags->pluck('name')->all(),
            'image'=> $this->cover_img
        ];
    }

    
    /**
     * Takes the actors collection and transform it into a string
     *
     * @param $actors $actors [explicite description]
     *
     * @return string
     */
    protected function stringify($actors)
    {
        $actorsArray = $actors->pluck('name')->all();

        return implode(',', $actorsArray);
    }
}

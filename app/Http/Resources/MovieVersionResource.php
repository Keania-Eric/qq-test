<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MovieVersionResource extends ResourceCollection
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
            'duration'=> $this->duration,
            'price'=> $this->price,
            'venue'=> $this->venue,
            'showtime'=> $this->showtime
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            =>$this->id,
            'title'         =>$this->title,
            'date'          =>$this->date,
            'time'          =>$this->time,
            'image'         =>$this->image,
            'description'   =>$this->description
        ];
    }
}

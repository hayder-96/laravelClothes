<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class acceptPeice extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      //  return parent::toArray($request);

      return[

        "id"=>$this->id,
        "name"=>$this->name,
        "size"=>$this->size,
        "numsize"=>$this->numsize,
        "color"=>$this->color,
        "accept_id"=>$this->accept_id,
        "image"=>$this->image,
        "clothes_id"=>$this->clothes_id,



      ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class acceptResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);

       return[

        "id"=>$this->id,
        "phone"=>$this->phone,
        "name"=>$this->name,
        "adress"=>$this->adress,
        "user_id"=>$this->user_id,
        "enable"=>$this->enable,
        "noty"=>$this->noty,


       ];
    }
}

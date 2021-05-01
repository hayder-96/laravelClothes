<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class detailclothes extends JsonResource
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
        'id'=>$this->id,
        'name'=>$this->name,
        'price'=>$this->price,
        'image1'=>$this->image1,
        'image2'=>$this->image2,
        'image3'=>$this->image3,
        'image4'=>$this->image4,
        'image5'=>$this->image5,
        'color1'=>$this->color1,
        'color2'=>$this->color2,
        'color3'=>$this->color3,
        'color4'=>$this->color4,
        'color5'=>$this->color5,
        'number1'=>$this->number1,
        'number2'=>$this->number2,
        'number3'=>$this->number3,
        'number4'=>$this->number4,
        'number5'=>$this->number5,
        'number6'=>$this->number6,
        'nummore'=>$this->nummore,
        'type'=>$this->type



       ];


    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 
        [//"message": "Uncaught Exception: Property [id] does not exist on this collection instance.

            'id' => $this->id,
            'title' => $this->title,
            'parent_id' => $this->subCategories->id,
            'updated_at' => $this->updated_at->toDateTimeString(),
            'products' => $this->products,
            'sub_categories' =>$this->subCategories//category->title//,subCategories
        ];
        //parent::toArray($request);
    }
}

<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
           'Product_Name'=>$this->product_name,
           'Product_Description'=>$this->product_details,
           'Price'=>$this->price,
           'Stock'=>$this->stock,
           'Discount'=>$this->discount,
           'Total Price'=>round((1-($this->discount/100))*$this->price,2)
           
        ];
    }
}

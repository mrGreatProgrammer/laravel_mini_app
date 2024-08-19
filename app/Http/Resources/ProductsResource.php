<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            // 'comments' => $this->comments,
            'comments' => ProductsCommentsResource::collection($this->comments),

            // 'price' => $this->price,
            // 'quantity' => $this->quantity,
            // 'created_at' => $this->created_at->toDateTimeString(),
            // 'updated_at' => $this->updated_at->toDateTimeString(),
            // 'category' => new CategoryResource($this->category),
            // 'images' => ImageResource::collection($this->images),
            // 'reviews' => ReviewResource::collection($this->reviews),
        ];
    }
}

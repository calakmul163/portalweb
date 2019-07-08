<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InfoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'active' => $this->active,
        ];
    }
}

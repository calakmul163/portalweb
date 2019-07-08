<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GaleriaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'url' => $this->url,
            'idimagen' => $this->idimagen,
            'idpublicacion' => $this->idpublicacion,
            'image' => $this->image,
            'type' => $this->type,
            'active' => $this->active,
        ];
    }
}

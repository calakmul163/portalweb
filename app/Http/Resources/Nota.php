<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotaResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'idimagen' => $this->idimagen,
            'idpublicacion' => $this->idpublicacion,
            'image' => $this->image,
            'fuente' => $this->fuente,
            'date' => $this->date,
            'type' => $this->type,
        ];
    }
}

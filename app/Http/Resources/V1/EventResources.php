<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name_event' => $this->name_event,
            'description' => $this->description,
            'category' => $this->category,
            'unit_price' => $this->unit_price,
            'number_tickets' => $this->number_tickets,
            "number_tickets_availables" =>$this->number_tickets_availables,
			"number_tickets_unavailable" =>$this->number_tickets_unavailable,
        ];
    }
}

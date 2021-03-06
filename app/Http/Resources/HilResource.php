<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HilResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'labcarname' => $this->labcarname,
            'firsthilentry' => new HilEntryResource($this->firstHilEntry())
        ];
    }
}

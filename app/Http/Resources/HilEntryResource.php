<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HilEntryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return return [
            'date' => $this->date,
            'machinename' => $this->string,
            'osversion' => $this->string,
            'projectname' => $this->string,
            'selectedServers' => $this->string,
            'labcarType' => $this->string,
            'autorun' => $this->boolean,
        ];
    }
}

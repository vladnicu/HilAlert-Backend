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
        return [
            'date' => $this->date,
            'machinename' => $this->machinename,
            'osversion' => $this->osversion,
            'projectname' => $this->projectname,
            'selectedServers' => $this->selectedServers,
            'labcarType' => $this->labcarType,
            'autorun' => $this->autorun,
        ];
    }
}

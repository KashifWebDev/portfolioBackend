<?php

namespace App\Http\Resources;

use App\Models\Project;
use Illuminate\Http\Resources\Json\JsonResource;

class projectResource extends JsonResource
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
            'id' => $this->id,
            'tags' => json_decode($this->tags),
            'description' => $this->description,
            'website' => $this->website,
            'pics' => Project::find($this->id)->photos,
            'type' => $this->type
        ];
    }
}

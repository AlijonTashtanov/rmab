<?php

namespace App\Http\Resources\Api;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class QualityControlResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'userFullName' => $this->user?->name,
            'comment' => $this->comment,
            'grade' => $this->grade,
            'status' => $this->status,
            'statusName' => $this->getStatusName(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

<?php

namespace App\Http\Resources\Api;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class ApplicationUseResource extends JsonResource
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
            'phone' => $this->phone,
            'comment' => $this->comment,
            'status' => $this->status,
            'statusName' => $this->getStatusName(),
            'date' => $this->date,
            'service_id' => $this->service_id,
            'serviceName' => $this->service?->getTranslation('name', app()->getLocale()),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

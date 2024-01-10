<?php

namespace App\Http\Resources\Api;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;
use JsonSerializable;

class LocalDocumentResource extends JsonResource
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
            'title' => $this->getTranslation('name', app()->getLocale()),
            'content' => $this->getTranslation('content', app()->getLocale()),
            'fileUrl' => $this->getFileUrl(),
            'fileSize' => $this->getFileSize(),
            'created_at' => Carbon::parse($this->created_at)->format('d.m.Y H:i'),
        ];
    }
}

<?php

namespace App\Http\Resources\Api;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;
use JsonSerializable;

class BannerResource extends JsonResource
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
            'title' => $this->getTranslation('title', app()->getLocale()),
            'content' => $this->getTranslation('content', app()->getLocale()),
            'button_label' => $this->getTranslation('button_label', app()->getLocale()),
            'imageUrl' => $this->getImageUrl(),
            'button_url' => $this->button_url,
            'question_suggestion' => $this->question_suggestion,
            'created_at' => Carbon::parse($this->created_at)->format('d.m.Y H:i'),

        ];
    }
}

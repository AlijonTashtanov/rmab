<?php

namespace App\Http\Resources\Api;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class ContactResource extends JsonResource
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
            'imageUrl' => $this->getImageUrl(),
            'phone' => $this->phone,
            'trust_number' => $this->trust_number,
            'question_suggestion' => $this->question_suggestion,
            'email' => $this->email,
            'name' => $this->getTranslation('name', app()->getLocale()),
            'address' => $this->getTranslation('address', app()->getLocale()),
            'title' => $this->getTranslation('title', app()->getLocale()),
            'description' => $this->getTranslation('description', app()->getLocale()),
            'location' => $this->location,
        ];
    }
}

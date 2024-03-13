<?php

namespace App\Http\Resources\Api;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;
use JsonSerializable;

class InformationAboutShipmentResource extends JsonResource
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
            'anwserByFullName' => $this->answerBy?->name,
            'typeWantTakeName' => $this->getWantTakeName(),
            'type_want_take' => $this->type_want_take,
            'shipment_number' => $this->shipment_number,
            'form1' => $this->form1,
            'fileUrl' => $this->getFileUrl(),
            'fileSize' => $this->getFileSize(),
            'shipping_date' => Carbon::parse($this->shipping_date)->format('d.m.Y H:i'),
            'created_at' => Carbon::parse($this->created_at)->format('d.m.Y H:i'),
            'anwser_at' => Carbon::parse($this->anwser_at)->format('d.m.Y H:i'),
            'answer_text' => $this->answer_text,
            'status' => $this->status,
            'statusName' => $this->getStatusName(),
        ];
    }
}

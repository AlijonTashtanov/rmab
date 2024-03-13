<?php

namespace App\Services;

use App\Models\InformationAboutShipment;
use App\Traits\Status;
use Illuminate\Support\Facades\Auth;

class InformationAboutShipmentService extends AbstractService
{
    /**
     * @param InformationAboutShipment $informationaboutshipment
     */
    public function __construct(InformationAboutShipment $informationaboutshipment)
    {
        $this->model = $informationaboutshipment;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @param $id
     * @return void
     */
    public function updateWithFile(array $data, $id)
    {
        $item = $this->show($id);
        $item->answer_text = $data['answer_text'] ?? '';
        $item->anwser_at = date('Y-m-d H:i:s');
        $item->anwser_by = Auth::user()->id;
        $item->status = $this->model::$status_active;
        $item->save();

        if (isset($data['image'])) {
            $item->clearMediaCollection('image');
            $item->addMediaFromRequest('image')->toMediaCollection('image');
        } elseif (isset($data['file'])) {
            $item->clearMediaCollection('file');
            $item->addMediaFromRequest('file')->toMediaCollection('file');
        }
    }

    /**
     * @param array $data
     * @param $id
     * @return void
     */
    public function cancelStore(array $data, $id)
    {
        $item = $this->show($id);
        $item->answer_text = $data['answer_text'];
        $item->anwser_at = date('Y-m-d H:i:s');
        $item->anwser_by = Auth::user()->id;
        $item->status = $this->model::$status_cancel;
        $item->save();
    }
}

<?php

namespace App\Services;

use App\Models\District;
use App\Traits\Status;

class DistrictService extends AbstractService
{
    /**
     * @param District $district
     */
    public function __construct(District $district)
    {
        $this->model = $district;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function store(array $data)
    {

        $item = new District();

        $names = [
            'uz' => $data['name_uz'],
            'ru' => $data['name_ru'],
            'en' => $data['name_en'],
        ];

        $item->setTranslations('name', $names);
        $item->region_id = $data['region_id'];
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->save();
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @param $id
     * @return void
     */
    public function update(array $data, $id)
    {
        $item = $this->show($id);

        $names = [
            'uz' => $data['name_uz'],
            'ru' => $data['name_ru'],
            'en' => $data['name_en'],
        ];

        $item->setTranslations('name', $names);
        $item->region_id = $data['region_id'];
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->save();
    }
}

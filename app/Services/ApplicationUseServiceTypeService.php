<?php

namespace App\Services;

use App\Models\ApplicationUseServiceTypes;
use App\Traits\Status;

class ApplicationUseServiceTypeService extends AbstractService
{
    public function __construct(ApplicationUseServiceTypes $applicationuseservicetypes)
    {
        $this->model = $applicationuseservicetypes;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function store(array $data)
    {

        $item = new ApplicationUseServiceTypes();
        $translations = [
            'uz' => $data['name_uz'],
            'en' => $data['name_en'],
            'ru' => $data['name_ru']
        ];

        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->setTranslations('name', $translations);
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

        $translations = [
            'uz' => $data['name_uz'],
            'en' => $data['name_en'],
            'ru' => $data['name_ru'],
        ];

        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->setTranslations('name', $translations);
        $item->save();
    }
}

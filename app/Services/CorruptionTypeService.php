<?php

namespace App\Services;

use App\Models\CorruptionType;
use App\Traits\Status;

class CorruptionTypeService extends AbstractService
{
    /**
     * @param CorruptionType $corruptiontype
     */
    public function __construct(CorruptionType $corruptiontype)
    {
        $this->model = $corruptiontype;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function store(array $data)
    {

        $item = new CorruptionType();

        $names = [
            'uz' => $data['name_uz'],
            'ru' => $data['name_ru'],
            'en' => $data['name_en'],
        ];

        $item->setTranslations('name', $names);
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
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->save();
    }
}

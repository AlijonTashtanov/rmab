<?php

namespace App\Services;

use App\Models\Region;
use App\Traits\Status;

class RegionService extends AbstractService
{
    public function __construct(Region $region)
    {
        $this->model = $region;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function store(array $data)
    {

        $item = new Region();

        $names = [
            'uz' => $data['name_uz'],
            'ru' => $data['name_ru'],
            'en' => $data['name_en'],
        ];

        $item->setTranslations('name', $names);
        $item->key = $data['key'];
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
        $item->key = $data['key'];
        $item->save();
    }
}

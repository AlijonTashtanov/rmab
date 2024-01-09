<?php

namespace App\Services;

use App\Models\Branch;

class BranchService extends AbstractService
{
    public function __construct(Branch $branch)
    {
        $this->model = $branch;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function store(array $data)
    {

        $item = new Branch();

        $names = [
            'uz' => $data['name_uz'],
            'ru' => $data['name_ru'],
            'en' => $data['name_en'],
        ];

        $descriptions = [
            'uz' => $data['description_uz'],
            'ru' => $data['description_ru'],
            'en' => $data['description_en'],
        ];

        $address = [
            'uz' => $data['address_uz'],
            'ru' => $data['address_ru'],
            'en' => $data['address_en'],
        ];

        $item->setTranslations('name', $names);
        $item->setTranslations('description', $descriptions);
        $item->setTranslations('address', $address);

        $item->phone = $data['phone'];
        $item->email = $data['email'];
        $item->region_id = $data['region_id'];
        $item->leadership = $data['leadership'];

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

        $descriptions = [
            'uz' => $data['description_uz'],
            'ru' => $data['description_ru'],
            'en' => $data['description_en'],
        ];

        $address = [
            'uz' => $data['address_uz'],
            'ru' => $data['address_ru'],
            'en' => $data['address_en'],
        ];

        $item->setTranslations('name', $names);
        $item->setTranslations('description', $descriptions);
        $item->setTranslations('address', $address);

        $item->phone = $data['phone'];
        $item->email = $data['email'];
        $item->region_id = $data['region_id'];
        $item->leadership = $data['leadership'];

        $item->save();
    }
}

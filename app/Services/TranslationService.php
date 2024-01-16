<?php

namespace App\Services;

use App\Models\Translation;

class TranslationService extends AbstractService
{
    /**
     * @param Translation $translation
     */
    public function __construct(Translation $translation)
    {
        $this->model = $translation;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function store(array $data)
    {

        $item = new Translation();

        $values = [
            'uz' => $data['value_uz'],
            'ru' => $data['value_ru'],
            'en' => $data['value_en'],
        ];
        $item->setTranslations('value', $values);
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

        $values = [
            'uz' => $data['value_uz'],
            'ru' => $data['value_ru'],
            'en' => $data['value_en'],
        ];
        $item->key = $data['key'];
        $item->setTranslations('value', $values);
        $item->save();
    }
}

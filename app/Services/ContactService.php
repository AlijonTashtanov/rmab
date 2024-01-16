<?php

namespace App\Services;

use App\Models\Contact;

class ContactService extends AbstractService
{
    /**
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->model = $contact;
        return parent::__construct($contact);
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function storeWithFile(array $data)
    {
        $item = new Contact();

        $titles = [
            'uz' => $data['title_uz'],
            'ru' => $data['title_ru'],
            'en' => $data['title_en'],
        ];

        $descriptions = [
            'uz' => $data['description_uz'] ?? '',
            'ru' => $data['description_ru'] ?? '',
            'en' => $data['description_en'] ?? '',
        ];

        $address = [
            'uz' => $data['address_uz'] ?? '',
            'ru' => $data['address_ru'] ?? '',
            'en' => $data['address_en'] ?? '',
        ];

        $name = [
            'uz' => $data['name_uz'] ?? '',
            'ru' => $data['name_ru'] ?? '',
            'en' => $data['name_en'] ?? ''
        ];

        $item->setTranslations('title', $titles);
        $item->setTranslations('description', $descriptions);
        $item->setTranslations('address', $address);
        $item->setTranslations('name', $name);
        $item->phone = $data['phone'] ?? '';
        $item->email = $data['email'] ?? '';
        $item->trust_number = $data['trust_number'] ?? '';
        $item->question_suggestion = $data['question_suggestion'] ?? '';
        $item->location = $data['location'] ?? '';
        $item->save();

        if (isset($data['image'])) {
            $item->addMediaFromRequest('image')->toMediaCollection('image');
        } elseif (isset($data['file'])) {
            $item->addMediaFromRequest('file')->toMediaCollection('file');
        }
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

        $titles = [
            'uz' => $data['title_uz'],
            'ru' => $data['title_ru'],
            'en' => $data['title_en'],
        ];

        $descriptions = [
            'uz' => $data['description_uz'] ?? '',
            'ru' => $data['description_ru'] ?? '',
            'en' => $data['description_en'] ?? '',
        ];

        $address = [
            'uz' => $data['address_uz'] ?? '',
            'ru' => $data['address_ru'] ?? '',
            'en' => $data['address_en'] ?? '',
        ];

        $name = [
            'uz' => $data['name_uz'] ?? '',
            'ru' => $data['name_ru'] ?? '',
            'en' => $data['name_en'] ?? ''
        ];

        $item->setTranslations('title', $titles);
        $item->setTranslations('description', $descriptions);
        $item->setTranslations('address', $address);
        $item->setTranslations('name', $name);
        $item->phone = $data['phone'] ?? '';
        $item->email = $data['email'] ?? '';
        $item->trust_number = $data['trust_number'] ?? '';
        $item->question_suggestion = $data['question_suggestion'] ?? '';
        $item->location = $data['location'] ?? '';
        $item->save();

        if (isset($data['image'])) {
            $item->clearMediaCollection('image');
            $item->addMediaFromRequest('image')->toMediaCollection('image');
        } elseif (isset($data['file'])) {
            $item->clearMediaCollection('file');
            $item->addMediaFromRequest('file')->toMediaCollection('file');
        }
    }
}

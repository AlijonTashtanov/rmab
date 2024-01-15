<?php

namespace App\Services\Api;

use App\Fields\Store\TextField;
use App\Models\ContactUs;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ContactUsService extends AbstractService
{
    /**
     * @var string
     */
    protected $model = ContactUs::class;

    /**
     * @param array $data
     * @return JsonResponse|mixed
     */
    public function store(array $data)
    {
        $fields = $this->getFields();

        $rules = [];

        foreach ($fields as $field) {

            $rules[$field->getName()] = $field->getRules();
        }

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {

            $errors = [];

            foreach ($validator->errors()->getMessages() as $key => $value) {

                $errors[$key] = $value[0];

            }

            return [
                'errors' => $errors
            ];
        }

        $data = $validator->validated();

        $object = new $this->model;

        foreach ($fields as $field) {

            $field->fill($object, $data);

        }

        $object->save();

        return $object;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return [
            TextField::make('full_name')->setRules('required|min:3|max:255'),
            TextField::make('phone')->setRules('required|min:3|max:15'),
            TextField::make('comment')->setRules('required|min:5|max:1024'),
        ];
    }
}

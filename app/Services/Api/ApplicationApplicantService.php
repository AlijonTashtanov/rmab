<?php

namespace App\Services\Api;

use App\Fields\Store\TextField;
use App\Http\Resources\Api\CorruptionTypeResource;
use App\Models\ApplicationApplicant;
use App\Models\CorruptionType;
use App\Traits\Status;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Validator;

class ApplicationApplicantService extends AbstractService
{
    protected $model = ApplicationApplicant::class;

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return array|void
     */

    public function storeWithFile(array $data)
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

//        $data = $validator->validated();

        $item = $this->model::create($data);

        if (isset($data['image'])) {

            $item->addMediaFromRequest('image')->toMediaCollection('image');

        } elseif (isset($data['file'])) {

            $item->addMediaFromRequest('file')->toMediaCollection('file');

        }
    }

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
     * @return AnonymousResourceCollection
     */
    public function corruptionTypes()
    {
        $corruptionTypes = CorruptionType::where(['status' => Status::$status_active])
            ->get();

        return CorruptionTypeResource::collection($corruptionTypes);
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return [
            TextField::make('first_name')->setRules('required|min:3|max:255'),
            TextField::make('last_name')->setRules('required|min:3|max:255'),
            TextField::make('region_id')->setRules('required|integer'),
            TextField::make('district_id')->setRules('required|integer'),
            TextField::make('address')->setRules('required|min:7|max:1024'),
            TextField::make('corruption_type_id')->setRules('required|integer'),
            TextField::make('address_where_corruption_occurred')->setRules('required|min:3|max:1024'),
            TextField::make('name_person_suspected_corruption')->setRules('required|min:3|max:1024'),
            TextField::make('phone')->setRules('required|min:3|max:15'),
            TextField::make('comment')->setRules(''),
            TextField::make('image')->setRules('required'),
        ];
    }
}

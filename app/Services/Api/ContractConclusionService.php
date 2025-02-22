<?php

namespace App\Services\Api;

use App\Fields\Store\TextField;
use App\Http\Resources\Api\DispatchGeographyResource;
use App\Http\Resources\Api\PageResource;
use App\Models\ContractConclusion;
use App\Models\DispatchGeography;
use App\Models\Page;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Validator;

class ContractConclusionService extends AbstractService
{
    protected $model = ContractConclusion::class;

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
            TextField::make('region_id')->setRules('required|integer'),
            TextField::make('district_id')->setRules('required|integer'),
            TextField::make('phone')->setRules('required|min:3|max:15'),
            TextField::make('email')->setRules('required|email'),
            TextField::make('company_name')->setRules('required'),
            TextField::make('service_id')->setRules('required'),
            TextField::make('dispatch_geography_id')->setRules('required'),
        ];
    }

    /**
     * @return array|AnonymousResourceCollection|string
     */
    public function pageInfo()
    {
        $contractPage = Page::where('page_type', Page::$page_contract_conclusion)
            ->orderBy('created_at', 'desc')
            ->first();
        if (empty($contractPage)) {
            return '';
        }
        return PageResource::make($contractPage);
    }

    /**
     * @return DispatchGeographyResource|AnonymousResourceCollection|string
     */
    public function dispatchGeography()
    {
        $dispatchGeographies = DispatchGeography::where('status', DispatchGeography::$status_active)
            ->get();

        if (count($dispatchGeographies) <= 0) {
            return '';
        }
        return DispatchGeographyResource::collection($dispatchGeographies);
    }
}

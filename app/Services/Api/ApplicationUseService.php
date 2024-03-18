<?php

namespace App\Services\Api;

use App\Fields\Store\TextField;
use App\Http\Resources\Api\ApplicationUseServiceTypesResource;
use App\Http\Resources\Api\PageResource;
use App\Models\ApplicationUseServiceTypes;
use App\Models\Page;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApplicationUseService extends AbstractService
{
    protected $model = \App\Models\ApplicationUseService::class;

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
        $object->phone = $data['phone'];
        $object->service_id = $data['service_id'];
        $object->date = $data['date'];
        $object->comment = $data['comment'];
        $object->status = $this->model::$status_inactive;
        $object->user_id = Auth::user()->id;

        $object->save();

        return $object;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return [
//            TextField::make('full_name')->setRules('required|min:3|max:255'),
//            TextField::make('region_id')->setRules('required|integer'),
//            TextField::make('district_id')->setRules('required|integer'),
            TextField::make('phone')->setRules('required|min:3|max:15'),
            TextField::make('service_id')->setRules('required'),
            TextField::make('date')->setRules('required|date_format:Y-m-d H:i:s'),
            TextField::make('comment')->setRules('required'),
            TextField::make('service_id')->setRules('required'),
//            TextField::make('dispatch_geography_id')->setRules('required'),
        ];
    }

    /**
     * @return array|AnonymousResourceCollection|string
     */
    public function pageInfo()
    {
        $contractPage = Page::where('page_type', Page::$page_application_services)
            ->orderBy('created_at', 'desc')
            ->first();
        if (empty($contractPage)) {
            return '';
        }
        return PageResource::make($contractPage);
    }

    /**
     * @return PageResource|AnonymousResourceCollection|string
     */
    public function types()
    {
        $applicationTypes = ApplicationUseServiceTypes::where('status', ApplicationUseServiceTypes::$status_active)
            ->orderBy('created_at', 'desc')
            ->get();

        if (empty($applicationTypes)) {
            return '';
        }
        return ApplicationUseServiceTypesResource::collection($applicationTypes);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(20);
    }
}

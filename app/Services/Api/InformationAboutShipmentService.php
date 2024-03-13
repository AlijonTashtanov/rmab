<?php

namespace App\Services\Api;

use App\Fields\Store\TextField;
use App\Http\Resources\Api\DispatchGeographyResource;
use App\Http\Resources\Api\PageResource;
use App\Models\DispatchGeography;
use App\Models\InformationAboutShipment;
use App\Models\Page;
use App\Traits\Status;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InformationAboutShipmentService extends AbstractService
{
    protected $model = InformationAboutShipment::class;

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

        $object->user_id = Auth::user()->id;
        $object->type_want_take = $data['type_want_take'];
        $object->form1 = $data['form1'];
        $object->shipping_date = $data['shipping_date'];
        $object->shipment_number = $data['shipment_number'];

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
//            TextField::make('phone')->setRules('required|min:3|max:15'),
            TextField::make('type_want_take')->setRules('required'),
            TextField::make('shipment_number')->setRules('required'),
            TextField::make('shipping_date')->setRules('required'),
            TextField::make('form1')->setRules('required|min:3|max:255'),
//            TextField::make('service_id')->setRules('required'),
//            TextField::make('dispatch_geography_id')->setRules('required'),
        ];
    }

    /**
     * @return array|AnonymousResourceCollection|string
     */
    public function pageInfo()
    {
        $contractPage = Page::where('page_type', Page::$page_information_about_shipment)
            ->orderBy('created_at', 'desc')
            ->first();
        if (empty($contractPage)) {
            return '';
        }
        return PageResource::make($contractPage);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(20);
    }
}

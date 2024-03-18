<?php

namespace App\Services\Api;

use App\Http\Resources\Api\UserResource;
use App\Models\InformationAboutShipment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\ApplicationUseService;

class ProfileService extends AbstractService
{
    /**
     * @var string
     */
    protected $model = User::class;

    /**
     * @return array
     */
    public function info()
    {

        return [
            'status' => true,
            'message' => 'success',
            'statusCode' => 200,
            'data' => UserResource::make(auth()->user()),
        ];
    }

    /**
     * @return array
     */
    public function getHomeInfo()
    {
        $userId = Auth::user()->id;

        return [
            'activeInformationAboutShipmentCount' => InformationAboutShipment::where('status', InformationAboutShipment::$status_active)->where('user_id', $userId)->count(),
            'inActiveInformationAboutShipmentCount' => InformationAboutShipment::where('status', InformationAboutShipment::$status_inactive)->where('user_id', $userId)->count(),
            'activeApplicationUseServiceCount' => ApplicationUseService::where('status', InformationAboutShipment::$status_active)->where('user_id', $userId)->count(),
            'inActiveApplicationUseServiceCount' => ApplicationUseService::where('status', InformationAboutShipment::$status_inactive)->where('user_id', $userId)->count(),
        ];
    }
}

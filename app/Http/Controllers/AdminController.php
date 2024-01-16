<?php

namespace App\Http\Controllers;

use App\Models\ApplicationApplicant;
use App\Models\ApplicationUseService;
use App\Models\ContactUs;
use App\Models\ContractConclusion;
use App\Models\InformationAboutShipment;
use App\Models\QualityControl;
use App\Models\Vacancy;
use App\Traits\Status;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $vacancyCount = Vacancy::count();

        $inactiveApplicationApplicantsCount = ApplicationApplicant::where('status', Status::$status_inactive)
            ->count();

        $inactiveContractConclusionCount = ContractConclusion::where('status', Status::$status_inactive)
            ->count();

        $inactiveQualityControlCount = QualityControl::where('status', Status::$status_inactive)
            ->count();

        $inactiveInformationAboutShipmentCount = InformationAboutShipment::where('status', Status::$status_inactive)
            ->count();

        $inactiveApplicationUseServiceCount = ApplicationUseService::where('status', Status::$status_inactive)
            ->count();

        $inactiveContactUseCount = ContactUs::where('status', Status::$status_inactive)
            ->count();

        return view('admin.index', [
            'vacancyCount' => $vacancyCount,
            'inactiveApplicationApplicantsCount' => $inactiveApplicationApplicantsCount,
            'inactiveContractConclusionCount' => $inactiveContractConclusionCount,
            'inactiveQualityControlCount' => $inactiveQualityControlCount,
            'inactiveInformationAboutShipmentCount' => $inactiveInformationAboutShipmentCount,
            'inactiveApplicationUseServiceCount' => $inactiveApplicationUseServiceCount,
            'inactiveContactUseCount' => $inactiveContactUseCount
        ]);
    }

    public function setCookie($cookie)
    {
        if ($cookie == 'darkMode') {
            Cookie::queue('darkMode', true);
        } elseif ($cookie == 'lightMode') {
            Cookie::queue('darkMode', false);
        }
        return back();
    }
}

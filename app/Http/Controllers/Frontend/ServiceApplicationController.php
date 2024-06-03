<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplicationUseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ServiceApplicationController extends Controller
{
    public function store(Request $request)
    {


        $rules = [
            'comment' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'service_id' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ];

        $messages = [
            'comment.required' => 'Izoh maydoni majburiy.',
            'phone.required' => 'Telefon raqam maydoni majburiy.',
            'date.required' => 'Sana kiritish maydoni majburiy.',
            'service_id.required' => 'Xizmat nomi maydoni majburiy.',
//            'region_id.required' => 'Viloyat tanlash majburiy.',
//            'district_id.required' => 'Shahar tanlash majburiy.',
//            'service_id.required' => 'Xizmat turi tanlash majburiy.',
//            'dispatch_geography_id.required' => 'Yuboruv geografiyasi tanlash majburiy.',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            toastr()->error('Fo`rmani to`ldirishda xatolik!');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }



        $contract = new ApplicationUseService();


        $contract->comment = $request->comment;
        $contract->phone = $request->phone;
        $contract->date = $request->date;
        $contract->service_id = $request->service_id;
        $contract->user_id = Auth::id();
        $contract->save();


        return redirect()->back()->with('success', 'Application of service has been saved successfully.');
    }
}

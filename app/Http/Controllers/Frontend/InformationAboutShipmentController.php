<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\InformationAboutShipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InformationAboutShipmentController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'shipment_number' => 'required|string|max:255',
            'shipping_date' => 'required|string|max:255',
            'form1' => 'required|string|max:255',
            'type_want_take' => 'required|string|max:255',
//            'region_id' => 'required|integer|exists:regions,id',
//            'district_id' => 'required|exists:districts,id',
//            'service_id' => 'required|integer|exists:services,id',
//            'dispatch_geography_id' => 'required',
        ];

        // Define custom error messages (optional)
        $messages = [
            'shipment_number.required' => 'Yetkazib berish raqami maydoni majburiy.',
            'shipping_date.required' => 'Jo`natma kuni maydoni majburiy.',
            'form1.required' => 'Javob shakli maydoni majburiy.',
            'type_want_take.required' => 'Shartnoma shakli maydoni majburiy.',
//            'region_id.required' => 'Viloyat tanlash majburiy.',
//            'district_id.required' => 'Shahar tanlash majburiy.',
//            'service_id.required' => 'Xizmat turi tanlash majburiy.',
//            'dispatch_geography_id.required' => 'Yuboruv geografiyasi tanlash majburiy.',

        ];

        // Run validation
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            toastr()->error('Fo`rmani to`ldirishda xatolik!');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }



        $shipment = new InformationAboutShipment();


        $shipment->shipment_number = $request->shipment_number;
        $shipment->shipping_date = $request->shipping_date;
        $shipment->form1 = $request->form1;
        $shipment->type_want_take = $request->type_want_take;
        $shipment->user_id = Auth::id();

        $shipment->save();

//        toastr()->success('Data has been saved successfully!');
        return redirect()->back()->with('success', 'Data created successfully');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\QualityControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class QualityControlController extends Controller
{
    public function store(Request $request)
    {

        $rules = [
            'comment' => 'required|string|max:255',
            'rating' => 'string|max:255',
//            'email' => 'required|string|max:255',
//            'company_name' => 'required|string|max:255',
//            'region_id' => 'required|integer|exists:regions,id',
//            'district_id' => 'required|exists:districts,id',
//            'service_id' => 'required|integer|exists:services,id',
//            'dispatch_geography_id' => 'required',
        ];

        $messages = [
            'comment.required' => 'Izoh maydoni majburiy.',
            'rating.required' => 'Telefon raqam maydoni majburiy.',
//            'email.required' => 'Email raqam maydoni majburiy.',
//            'company_name.required' => 'Tashkilot nomi maydoni majburiy.',
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



        $contract = new QualityControl();


        $contract->comment = $request->comment;
        $contract->grade = $request->rating;
        $contract->user_id = Auth::id();
        $contract->save();


        return redirect()->back()->with('success', 'Quality control data has been saved successfully.');
    }
}

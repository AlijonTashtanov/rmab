<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContractConclusion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContractConclusionController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'region_id' => 'required|integer|exists:regions,id',
            'district_id' => 'required|exists:districts,id',
            'service_id' => 'required|integer|exists:services,id',
            'dispatch_geography_id' => 'required',
        ];

        // Define custom error messages (optional)
        $messages = [
            'full_name.required' => 'Ism maydoni majburiy.',
            'phone.required' => 'Telefon raqam maydoni majburiy.',
            'email.required' => 'Email raqam maydoni majburiy.',
            'company_name.required' => 'Tashkilot nomi maydoni majburiy.',
            'region_id.required' => 'Viloyat tanlash majburiy.',
            'district_id.required' => 'Shahar tanlash majburiy.',
            'service_id.required' => 'Xizmat turi tanlash majburiy.',
            'dispatch_geography_id.required' => 'Yuboruv geografiyasi tanlash majburiy.',

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



        $contract = new ContractConclusion();


        $contract->full_name = $request->full_name;
        $contract->phone = $request->phone;
        $contract->email = $request->email;
        $contract->company_name = $request->company_name;
        $contract->region_id = $request->region_id;
        $contract->district_id = $request->district_id;
        $contract->service_id = $request->service_id;
        $contract->dispatch_geography_id = $request->dispatch_geography_id;


        $contract->save();
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('page-contract')->with('success', 'Contract created successfully');
    }
}

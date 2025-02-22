<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
   public function index()
    {
        $contact = Contact::orderBy('created_at', 'desc')->first();

        return view('frontend.contact.index', compact('contact'));
    }
    public function store(Request $request)
    {
//        dd($request);
        $rules = [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'comment' => 'required|string|max:255',
//            'company_name' => 'required|string|max:255',
//            'region_id' => 'required|integer|exists:regions,id',
//            'district_id' => 'required|exists:districts,id',
//            'service_id' => 'required|integer|exists:services,id',
//            'dispatch_geography_id' => 'required',
        ];

        $messages = [
            'comment.required' => 'Izoh maydoni majburiy.',
            'phone.required' => 'Telefon raqam maydoni majburiy.',
            'full_name.required' => 'Ism maydoni majburiy.',
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



        $contract = new ContactUs();


        $contract->comment = $request->comment;
        $contract->phone = $request->phone;
        $contract->full_name =  $request->full_name;
        $contract->save();


        return redirect()->back()->with('success', 'Contact has been saved successfully.');
    }
}

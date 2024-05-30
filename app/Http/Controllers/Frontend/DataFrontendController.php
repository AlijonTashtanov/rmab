<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class DataFrontendController extends Controller
{
    public function index()
    {
        $activeData = Information::orderBy('created_at', 'desc')->first();

        return view('frontend.data.index',compact('activeData'));
    }
    public function detail($id)
    {
        $dataDetail = Information::findOrFail($id);

        return view('frontend.data.data-detail',compact('dataDetail'));
    }
}

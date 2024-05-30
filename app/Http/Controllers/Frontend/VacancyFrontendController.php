<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class VacancyFrontendController extends Controller
{
   public function index()
   {
       Paginator::useBootstrap();

       $activeVacancies=Vacancy::where('status', Vacancy::$status_active)->paginate(4);


       return view('frontend.vacancy.index',compact('activeVacancies'));
   }
}

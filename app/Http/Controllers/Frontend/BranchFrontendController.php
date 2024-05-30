<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchFrontendController extends Controller
{
    public function index()
    {
        $activeBranches=Branch::paginate(4);

        return view('frontend.branches.index',compact('activeBranches'));
    }
}

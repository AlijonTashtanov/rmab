<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ContactController extends Controller
{
   public function index()
    {
        $contact = Contact::orderBy('created_at', 'desc')->first();

        return view('frontend.contact.index', compact('contact'));
    }
}

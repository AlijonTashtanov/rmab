<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\LocalDocument;
use Illuminate\Http\Request;

class LocalDocumentController extends Controller
{
    public function index()
    {
        $localDocuments = LocalDocument::where('status', LocalDocument::$status_active)->paginate(6);

        return view('frontend.local-documents.index',compact('localDocuments'));
    }
    public function detail($id)
    {
        $localDocuments = LocalDocument::findOrFail($id);

        return view('frontend.local-documents.detail',compact('localDocuments'));
    }
    public function downloadDocument($id)
    {
        $document = LocalDocument::findOrFail($id);
        $filePath = storage_path('app/public/' . $document->file_path); // Adjust the path as necessary

        return response()->download('frontend.local-documents.index', $document->getTranslation('title', app()->getLocale()) . '.pdf');
    }
}

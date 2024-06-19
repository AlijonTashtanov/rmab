<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\LocalDocument;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class LocalDocumentController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        $localDocuments = LocalDocument::where('status', LocalDocument::$status_active)->paginate(10);

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
        $filePath = storage_path('app/public/' . $document->file_path);

        return response()->download('frontend.local-documents.index', $document->getTranslation('title', app()->getLocale()) . '.pdf');
    }
}

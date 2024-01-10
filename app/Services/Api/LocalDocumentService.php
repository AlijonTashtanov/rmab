<?php

namespace App\Services\Api;

use App\Models\LocalDocument;
use App\Traits\Status;

class LocalDocumentService extends AbstractService
{
    protected $model = LocalDocument::class;

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model::where('status', Status::$status_active)->orderBy('created_at', 'desc')->paginate(20);
    }

    /**
     * @return mixed
     */
    public function latestActiveLimitIndex($id)
    {
        return $this->model::where('status', Status::$status_active)
            ->where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();
    }
}

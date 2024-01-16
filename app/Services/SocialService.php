<?php

namespace App\Services;

use App\Models\Social;
use App\Traits\Status;

class SocialService extends AbstractService
{
    /**
     * @param Social $social
     */
    public function __construct(Social $social)
    {
        $this->model = $social;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function store(array $data)
    {
        $item = new Social();
        $item->url = $data['url'] ?? '';
        $item->icon = $data['icon'] ?? '';
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->save();
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @param $id
     * @return void
     */
    public function update(array $data, $id)
    {
        $item = $this->show($id);
        $item->url = $data['url'] ?? '';
        $item->icon = $data['icon'] ?? '';
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->save();
    }
}

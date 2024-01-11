<?php

namespace App\Services\Api;

use App\Http\Resources\Api\BranchResource;
use App\Http\Resources\Api\DistrictResource;
use App\Models\Branch;
use App\Models\District;
use App\Models\Region;
use App\Traits\Status;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RegionService extends AbstractService
{
    /**
     * @var string
     */
    protected $model = Region::class;

    /**
     * @param $key
     * @return BranchResource
     */
    public function regionBranch($key)
    {
        $region = $this->showKey($key);

        $branch = Branch::where(['region_id' => $region->id])
            ->orderBy('created_at', 'desc')
            ->firstOrFail();

        return BranchResource::make($branch);
    }

    /**
     * @param $id
     * @return array|AnonymousResourceCollection
     */
    public function regionBranches($key)
    {
        $region = $this->showKey($key);

        $branches = Branch::where(['region_id' => $region->id])
            ->orderBy('created_at', 'desc')
            ->get();
        $data = [
            'title' => __('branches.title'),
            'content' => __('branches.content'),
            'branches' => BranchResource::collection($branches)
        ];

        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function showKey($key)
    {
        return $this->model::where('key', $key)->firstOrFail();
    }

    /**
     * @param $id
     * @return AnonymousResourceCollection
     */
    public function districts($id)
    {
        $region = $this->show($id);

        $districts = District::where(['region_id' => $region->id])
            ->where('status', Status::$status_active)
            ->orderBy('created_at', 'desc')
            ->get();

        return DistrictResource::collection($districts);
    }
}

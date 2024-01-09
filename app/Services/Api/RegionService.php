<?php

namespace App\Services\Api;

use App\Http\Resources\Api\BranchResource;
use App\Models\Branch;
use App\Models\Region;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RegionService extends AbstractService
{
    /**
     * @var string
     */
    protected $model = Region::class;

    /**
     * @param $id
     * @return BranchResource
     */
    public function regionBranch($id)
    {
        $region = $this->show($id);

        $branch = Branch::where(['region_id' => $region->id])
            ->orderBy('created_at', 'desc')
            ->first();

        return BranchResource::make($branch);
    }

    /**
     * @param $id
     * @return AnonymousResourceCollection
     */
    public function regionBranches($id)
    {
        $region = $this->show($id);

        $branches = Branch::where(['region_id' => $region->id])
            ->orderBy('created_at', 'desc')
            ->get();

        return BranchResource::collection($branches);
    }
}

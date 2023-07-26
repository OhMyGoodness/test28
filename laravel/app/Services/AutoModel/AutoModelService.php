<?php

namespace App\Services\AutoModel;

use App\Interfaces\AutoModel\AutoModelServiceInterface;
use App\Models\AutoModel;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class AutoModelService
 * @package App\Services\AutoModel
 */
class AutoModelService implements AutoModelServiceInterface
{
    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return AutoModel::query()->get();
    }
}

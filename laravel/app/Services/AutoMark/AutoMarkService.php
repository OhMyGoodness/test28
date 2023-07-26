<?php

namespace App\Services\AutoMark;

use App\Interfaces\AutoMark\AutoMarkServiceInterface;
use App\Models\AutoMark;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class AutoMarkService
 * @package App\Services\AutoMark
 */
class AutoMarkService implements AutoMarkServiceInterface
{
    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return AutoMark::query()->get();
    }
}

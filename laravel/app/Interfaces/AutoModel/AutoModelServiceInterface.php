<?php

namespace App\Interfaces\AutoModel;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface AutoModelServiceInterface
 * @package App\Interfaces\AutoModel
 */
interface AutoModelServiceInterface
{
    /**
     * @return Collection|null
     */
    public function list(): ?Collection;
}

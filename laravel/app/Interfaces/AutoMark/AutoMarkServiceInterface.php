<?php

namespace App\Interfaces\AutoMark;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface AutoMarkServiceInterface
 * @package App\Interfaces\AutoMark
 */
interface AutoMarkServiceInterface
{
    /**
     * @return Collection|null
     */
    public function list(): ?Collection;
}

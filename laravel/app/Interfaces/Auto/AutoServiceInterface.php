<?php

namespace App\Interfaces\Auto;

use App\Http\DTO\Auto\AutoCreateDto;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Interface AutoServiceInterface
 * @package App\Interfaces\Auto
 */
interface AutoServiceInterface
{
    /**
     * @return Collection|null
     */
    public function list(): ?Collection;

    /**
     * @param int $user_id
     * @return Collection|null
     */
    public function listByUserId(int $user_id): ?Collection;

    /**
     * @param AutoCreateDto $data
     * @return Model|null
     */
    public function create(AutoCreateDto $data): ?Model;

    /**
     * @param int $id
     * @param AutoCreateDto $data
     * @return Model|null
     */
    public function update(int $id, AutoCreateDto $data): ?Model;

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;

}

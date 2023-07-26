<?php

namespace App\Services\Auto;

use App\Http\DTO\Auto\AutoCreateDto;
use App\Interfaces\Auto\AutoServiceInterface;
use App\Models\Auto;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AutoMarkService
 * @package App\Services\AutoMark
 */
class AutoService implements AutoServiceInterface
{
    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return Auto::query()->get();
    }

    /**
     * @param int $user_id
     * @return Collection
     */
    public function listByUserId(int $user_id): Collection
    {
        return Auto::query()->where("user_id", $user_id)->get();
    }

    /**
     * @param AutoCreateDto $data
     * @return Builder|Model
     */
    public function create(AutoCreateDto $data): ?Model
    {
        return Auto::query()->firstOrCreate($data->all());
    }

    /**
     * @param int $id
     * @param AutoCreateDto $data
     * @return Model|null
     */
    public function update(int $id, AutoCreateDto $data): ?Model
    {
        return tap(Auto::query()->where('id', $id))->update($data->all())->first();
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return Auto::query()->where('id', $id)->delete();
    }
}

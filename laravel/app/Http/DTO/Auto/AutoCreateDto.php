<?php

namespace App\Http\DTO\Auto;

use App\Http\DTO\BaseDto;
use Illuminate\Support\Arr;

/**
 * Class AutoCreateDto
 * @package Http\DTO\Auto
 */
class AutoCreateDto extends BaseDto
{
    /**
     * @var int|null
     */
    public ?int $year;

    /**
     * @var int|null
     */
    public ?int $mileage;

    /**
     * @var string|null
     */
    public ?string $color;

    /**
     * @var int|null
     */
    public ?int $model_id;

    /**
     * @var int|null
     */
    public ?int $mark_id;

    public static function transform(array $data): AutoCreateDto
    {
        $dto = new self();
        $dto->year = Arr::get($data, 'year');
        $dto->mileage = Arr::get($data, 'mileage');
        $dto->color = Arr::get($data, 'color');
        $dto->model_id = Arr::get($data, 'model_id');
        $dto->mark_id = Arr::get($data, 'mark_id');

        return $dto;
    }
}

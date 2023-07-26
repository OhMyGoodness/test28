<?php

namespace App\Http\Resources\Auto;

use App\Models\Auto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CityResource
 * @package Http\Resources\Auto
 */
class AutoResource extends JsonResource
{
    /** @var Auto */
    public $resource;

    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'      => $this->resource->id,
            'year'    => $this->resource->year,
            'mileage' => $this->resource->mileage,
            'color'   => $this->resource->color,
            'model'   => $this->resource->model->name,
            'mark'    => $this->resource->model->mark->name
        ];
    }
}

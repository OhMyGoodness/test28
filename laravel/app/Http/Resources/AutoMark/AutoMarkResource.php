<?php

namespace App\Http\Resources\AutoMark;

use App\Models\AutoMark;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CityResource
 * @package Http\Resources\AutoMark
 */
class AutoMarkResource extends JsonResource
{
    /** @var AutoMark */
    public $resource;

    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'   => $this->resource->id,
            'name' => $this->resource->name
        ];
    }
}

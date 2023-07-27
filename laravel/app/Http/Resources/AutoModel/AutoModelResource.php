<?php

namespace App\Http\Resources\AutoModel;

use App\Models\AutoModel;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class AutoModelResource
 * @package Http\Resources\AutoModel
 */
class AutoModelResource extends JsonResource
{
    /** @var AutoModel */
    public $resource;

    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'        => $this->resource->id,
            'name'      => $this->resource->name,
            'mark_name' => $this->resource->mark->name ?? null
        ];
    }
}

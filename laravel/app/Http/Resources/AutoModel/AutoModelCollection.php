<?php

namespace App\Http\Resources\AutoModel;

use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Class AutoModelCollection
 * @package Http\Resources\AutoModel
 */
class AutoModelCollection extends ResourceCollection
{
    public $collects = AutoModelResource::class;

    /**
     * Transform the resource collection into an array.
     */
    public function toArray($request): array
    {
        return [
            'data' => $this->collection,
        ];
    }
}

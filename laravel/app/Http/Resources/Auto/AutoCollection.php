<?php

namespace App\Http\Resources\Auto;

use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Class AutoCollection
 * @package Http\Resources\Auto
 */
class AutoCollection extends ResourceCollection
{
    public $collects = AutoResource::class;

    /**
     * Transform the resource collection into an array.
     */
    public function toArray($request) : array
    {
        return [
            'data' => $this->collection,
        ];
    }
}

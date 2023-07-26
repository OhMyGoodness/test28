<?php

namespace App\Http\Resources\AutoMark;

use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Class AutoMarkCollection
 * @package Http\Resources\AutoMark
 */
class AutoMarkCollection extends ResourceCollection
{
    public $collects = AutoMarkResource::class;

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

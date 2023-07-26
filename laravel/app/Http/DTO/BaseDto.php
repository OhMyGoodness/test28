<?php

namespace App\Http\DTO;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class BaseDto
 * @package Http\DTO
 */
class BaseDto extends DataTransferObject
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}

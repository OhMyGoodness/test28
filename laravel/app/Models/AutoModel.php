<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class AutoModel
 * @property int $id
 * @property string $name
 * @property AutoMark mark
 * @package Models
 */
class AutoModel extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'auto_models';

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'name'];

    /**
     * @var bool
     */
    public $timestamps = true;

    public function mark(): HasOne
    {
        return $this->hasOne(AutoMark::class, 'id', 'mark_id');
    }
}

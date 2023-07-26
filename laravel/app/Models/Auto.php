<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Auto
 * @property int $id
 * @property int|null $year
 * @property int|null $mileage
 * @property string|null $color
 * @property int $model_id
 * @property int $mark_id
 * @property int|null $user_id
 * @property AutoModel model
 * @package Models
 */
class Auto extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'auto';

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'year', 'mileage', 'color', 'model_id', 'mark_id', 'user_id'];

    /**
     * @var string[]
     */
    protected $hidden = ['user_id'];

    /**
     * @var string[]
     */
    protected $casts = ['year' => 'integer', 'mileage' => 'integer'];

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @return HasOne
     */
    public function model(): HasOne
    {
        return $this->hasOne(AutoModel::class, 'id', 'model_id');
    }
}

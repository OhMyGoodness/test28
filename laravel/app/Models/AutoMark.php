<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AutoMark
 * @property int $id
 * @property string $name
 * @package Models
 */
class AutoMark extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'auto_marks';

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'name'];

    /**
     * @var bool
     */
    public $timestamps = true;
}

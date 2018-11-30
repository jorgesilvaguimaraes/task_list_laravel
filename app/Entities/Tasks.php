<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Tasks.
 *
 * @package namespace App\Entities;
 */
class Tasks extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    public    $timestamps = true;
    public    $incrementing = true;

    protected $fillable = ['id', 'titulo', 'descricao', 'status', 'data', 'conclusao'];

}

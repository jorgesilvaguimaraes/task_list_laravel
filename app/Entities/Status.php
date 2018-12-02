<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Status.
 *
 * @package namespace App\Entities;
 */
class Status extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'status';
    protected $primaryKey = 'id';
    public    $timestamps = true;
    public    $incrementing = true;

    protected $fillable = ['id','status'];

    public function tasks()
    {
        return $this->hasMany(Tasks::class, 'id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    public    $timestamps = true;
    public    $incrementing = true;

    protected $fillable = ['id', 'titulo', 'descricao', 'status', 'data', 'conclusao'];
}

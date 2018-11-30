<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TasksRepository;
use App\Entities\Tasks;
use App\Validators\TasksValidator;

/**
 * Class TasksRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TasksRepositoryEloquent extends BaseRepository implements TasksRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Tasks::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}

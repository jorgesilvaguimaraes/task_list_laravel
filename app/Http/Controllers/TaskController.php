<?php

namespace App\Http\Controllers;

use App\Repositories\TasksRepository;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $task_repository;

    public function __construct(TasksRepository $tasksRepository)
    {
        $this->task_repository = $tasksRepository;
    }


    public function allTasks()
    {
        return $this->task_repository->all();
    }

    public function getTask($id)
    {
        return 'getTask '.$id;
    }

    public function saveTask()
    {
        return 'saveTask';
    }

    public function updateTask($id)
    {
        return 'updateTask '.$id;
    }

    public function deleteTask($id)
    {
        return 'deleteTask '.$id;
    }

}

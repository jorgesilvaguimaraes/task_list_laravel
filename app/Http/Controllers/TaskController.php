<?php

namespace App\Http\Controllers;

use App\Repositories\TasksRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

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
        return $this->task_repository->find($id);
    }

    public function saveTask(Request $request)
    {

        return   $this->task_repository->create($request->all());
    }

    public function updateTask($id)
    {
        return $this->task_repository->update(request()->all(), $id);
    }

    public function deleteTask($id)
    {
        return $this->task_repository->delete($id);
    }

}

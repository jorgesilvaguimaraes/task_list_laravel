<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function allTasks()
    {
        return 'allTasks';
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

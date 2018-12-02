<?php

namespace App\Http\Controllers;

use App\Repositories\StatusRepository;
use App\Repositories\TasksRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class TaskController extends Controller
{
    protected $task_repository;
    protected $status_repository;

    public function __construct(TasksRepository $tasksRepository, StatusRepository $statusRepository)
    {
        $this->task_repository = $tasksRepository;
        $this->status_repository = $statusRepository;
    }


    /**
     * @see Função que chama a pagina inicial do sistema que contem todas as tarefas cadastradas.
     * @return mixed
     */
    public function index()
    {
        $dados = ['tasks'];

        $tasks = $this->task_repository->all();
        return view('sistema.index.index', compact($dados));
    }

    /**
     * @see Função que chama o formulário de cadastro ou alteração de tarefa
     * @param null $id
     * @return mixed
     */
    public function form($id=null)
    {
        $dados = ['status'];

        if(!is_null($id))
        {
            $task = $this->task_repository->find($id);
            array_push($dados,'task');
        }
        
        $status = $this->status_repository->all();

        return view('sistema.task.form',compact($dados));
    }

    /**
     * @see Função que envia os dados para serem salvos
     * @param null $id
     * @return mixed
     */
    public function save($id=null)
    {
        $input = request()->all();

        if( is_null($id) )
        {
            $this->task_repository->create($input);
        }else{
            $this->task_repository->update($input, $id);

        }

        return redirect()->route('tasks');
    }

    /**
     * @see Função que deleta uma tarefa
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $this->task_repository->delete($id);

        return redirect()->route('tasks');
    }

    /**
     * @see Função que finaliza uma tarefa
     * @param $id
     * @return mixed
     */
    public function finaliza($id)
    {
        $task = $this->task_repository->find($id)->toArray();
        $task['status_id'] = 4;
        $this->task_repository->update($task, $id);

        return redirect()->route('tasks');
    }


    /**
     * @see Funções usadas pela API RESTFULL
     *
     */
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

@extends('layouts.sistema')
@section('conteudo')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{route('task.form')}}" class="btn btn-primary btn-lg btn-block" role="button" >Nova Tarefa</a>
        </div>
    </div>
    <br>
    <div class="row">

        @if( isset($tasks) )

            @foreach($tasks as $task)
                <div class="col-sm-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-center">
                                <span class="badge badge-{{$task->status_id == 1 ? 'dark' : ($task->status_id == 2 ? 'primary' : ($task->status_id == 3 ? 'danger' : 'success'  ))}} col-sm-12">{{ $task->status->status.'  - '.dateBR($task->data)}}</span>
                            </h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title" data-toggle="tooltip" data-placement="top"
                                title="{{$task->descricao}}">
                                {{$task->titulo}}</h5>
                            <p class="text-justify">
                            </p>
                            <div class="text-center">

                                <a role="button"  href="{{route('task.form', $task->id)}}" class="btn btn-sm btn-primary">Editar</a>
                                <a role="button"  href="{{route('task.delete',$task->id)}}" class="btn btn-sm btn-danger">Excluir</a>
                                <a role="button"  href="{{route('task.finaliza',$task->id)}}" class="btn btn-sm btn-success">Finalizar</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        @endif


    </div>

@stop

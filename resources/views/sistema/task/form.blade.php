@extends('layouts.sistema')
@section('conteudo')

    <div class="row">
        <div class=" col-sm-12">

            <form  method="post" action="{{route('task.save', isset($task) ? $task->id : null)}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputTitulo">Titulo *</label>
                    <input type="text" class="form-control " id="inputTitulo" name="titulo" value="{{ isset($task) ? $task->titulo : ''}}"  placeholder="Titulo" required >
                </div>
                <div class="form-group">
                    <label for="inputDescricao">Descrição</label>
                    <textarea class="form-control" id="inputDescricao" name="descricao"  rows="3">{{ isset($task) ? $task->descricao : ''}}</textarea>
                </div>
                <div class="form-group">
                    <label for="inputStatus">Status *</label>
                    <select class="form-control" id="inputStatus" name="status_id" required >
                        <option value="">Selecione</option>
                        @if( isset($status) )
                            @foreach($status as $statu )
                                <option  {{selected( isset($task) ?  $task->status_id : '', $statu->id)}} value="{{$statu->id}}">{{$statu->status}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputData">Data *</label>
                    <input type="date" class="form-control" value="{{isset($task) ? $task->data : ''}}" id="inputData" name="data" required>
                </div>

                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{route('tasks')}}" class="btn btn-primary" role="button">Voltar</a>
            </form>

        </div>
    </div>

@stop

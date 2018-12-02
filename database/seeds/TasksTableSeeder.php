<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            [
                "titulo" => "Leva filho a escola",
                "descricao" => "As 7:45 AM levar o filho a escola todas as manhã",
                "status_id" => 1,
                "data" => "2018/01/01",
            ],
            [
                "titulo" => "Consulta com Gastro",
                "descricao" => "Ir para consulta com o gastro as 10:00 pm",
                "status_id" => 2,
                "data" => "2018/01/01",
            ],
            [
                "titulo" => "Ir buscar o filho na escola",
                "descricao" => "As 11:00 pm ir buscar o filho na escola e deixar na aula de natação",
                "status_id" => 3,
                "data" => "2018/01/01",
            ],
            [
                "titulo" => "Ir buscar o filho na escola de natação",
                "descricao" => "Não esquecer de buscar o filho na aula de natação e deixar em casa as 12:00",
                "status_id" => 4,
                "data" => "2018/01/01",
            ]

        ];

        foreach ($dados as $dado) {
            $tasks = new \App\Entities\Tasks();
            $tasks->fill($dado)->save();
        }


    }
}

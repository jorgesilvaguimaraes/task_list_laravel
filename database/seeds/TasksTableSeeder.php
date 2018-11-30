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
              "titulo" => "Levar o filho a escola",
              "descricao" => "As 7:45 AM levar o filho a escola todas as manhã",
              "status" => "1",
              "data" =>"2018/01/01",
              "conclusao" =>false
          ],
        ];

        $tasks = new \App\Entities\Tasks();
        foreach ($dados as $dado)
        {
            $tasks->fill($dado)->save();
        }



    }
}

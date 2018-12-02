<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dados = [
            [
                "status"=>"Iniciada"
            ],
            [
                "status"=>"Em Andamento"
            ],
            [
                "status"=>"Parada"
            ],
            [
                "status"=>"Concluida"
            ]
        ];

        foreach ($dados as $dado)
        {
            $status = new \App\Entities\Status();
            $status->fill($dado)->save();
        }
    }
}

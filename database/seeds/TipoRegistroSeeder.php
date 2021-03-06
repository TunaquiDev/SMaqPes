<?php

use Illuminate\Database\Seeder;

class TipoRegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('tipo_registro')->insert([
            [
                'nombre' => 'MANTENIMIENTO PREVENTIVO',
                'estado' => true,
                'created_at' => getCurrentDate(),
            ],
            [
                'nombre' => 'MANTENIMIENTO CORRECTIVO',
                'estado' => true,
                'created_at' => getCurrentDate(),
            ],
            [
                'nombre' => 'MANTENIMIENTO PREDICTIVO',
                'estado' => true,
                'created_at' => getCurrentDate()
            ]
        ]);
    }
}

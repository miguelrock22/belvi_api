<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([ 'id' => 1, 'name' => 'Depilación con cera' ]);
        DB::table('services')->insert([ 'id' => 2, 'name' => 'Maquillaje' ]);
        DB::table('services')->insert([ 'id' => 3, 'name' => 'Servicios y cuidados de los pies' ]);
    }
}

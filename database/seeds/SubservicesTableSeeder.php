<?php

use Illuminate\Database\Seeder;

class SubservicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subservices')->insert( [ 'id' => 1, 'service_id' => 1, 'name' => 'Cera tradicional' ] );
        DB::table('subservices')->insert( [ 'id' => 2, 'service_id' => 1, 'name' => 'Cera desechable roll-on con bandas' ] );

        DB::table('subservices')->insert( [ 'id' => 3, 'service_id' => 2, 'name' => 'Maquillaje social' ] );
        DB::table('subservices')->insert( [ 'id' => 4, 'service_id' => 2, 'name' => 'Maquillaje bodas' ] );

        DB::table('subservices')->insert( [ 'id' => 5, 'service_id' => 3, 'name' => 'Pedicura basica tradicional' ] );
        DB::table('subservices')->insert( [ 'id' => 6, 'service_id' => 3, 'name' => 'Belleza integral del pie' ] );
    }
}

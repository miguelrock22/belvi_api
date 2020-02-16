<?php

use Illuminate\Database\Seeder;

class TreatmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treatments')->insert( [ 'id'=> 1, 'subservice_id'=> 1, 'name'=> 'Piernas completas', 'pvp'=> 19.00 ] );
        DB::table('treatments')->insert( [ 'id'=> 2, 'subservice_id'=> 1, 'name'=> 'Medias piernas', 'pvp'=> 12.00 ] );
        DB::table('treatments')->insert( [ 'id'=> 3, 'subservice_id'=> 1, 'name'=> 'Ingles', 'pvp'=> 6.00 ] );

        DB::table('treatments')->insert( [ 'id'=> 4, 'subservice_id'=> 2, 'name'=> 'Piernas completas', 'pvp'=> 21.00 ] );
        DB::table('treatments')->insert( [ 'id'=> 5, 'subservice_id'=> 2, 'name'=> 'Medias piernas', 'pvp'=> 13.00 ] );
        DB::table('treatments')->insert( [ 'id'=> 6, 'subservice_id'=> 2, 'name'=> 'Ingles', 'pvp'=> 6.00 ] );

        DB::table('treatments')->insert( [ 'id'=> 7, 'subservice_id'=> 3, 'name'=> 'Maquillaje suave y natural', 'pvp'=> 35.00 ] );
        DB::table('treatments')->insert( [ 'id'=> 8, 'subservice_id'=> 3, 'name'=> 'Maquillaje intenso con correcciones', 'pvp'=> 38.00 ] );

        DB::table('treatments')->insert( [ 'id'=> 9, 'subservice_id'=> 4, 'name'=> 'Maquillaje para novia', 'pvp'=> 90.00 ] );
        DB::table('treatments')->insert( [ 'id'=> 10, 'subservice_id'=> 4, 'name'=> 'Maquillaje para madrina', 'pvp'=> 70.00 ] );
        DB::table('treatments')->insert( [ 'id'=> 11, 'subservice_id'=> 4, 'name'=> 'Maquillaje para novio', 'pvp'=> 60.00 ] );

        DB::table('treatments')->insert( [ 'id'=> 12, 'subservice_id'=> 5, 'name'=> 'Con esmaltado', 'pvp'=> 25.00 ] );
        DB::table('treatments')->insert( [ 'id'=> 13, 'subservice_id'=> 5, 'name'=> 'Sin esmaltado', 'pvp'=> 20.00 ] );
        DB::table('treatments')->insert( [ 'id'=> 14, 'subservice_id'=> 5, 'name'=> 'Con esmaltado permanente', 'pvp'=> 35.00 ] );

        DB::table('treatments')->insert( [ 'id'=> 15, 'subservice_id'=> 6, 'name'=> 'Pies secos', 'pvp'=> 40.00 ] );
        DB::table('treatments')->insert( [ 'id'=> 16, 'subservice_id'=> 6, 'name'=> 'Pies fatigados', 'pvp'=> 40.00 ] );
        DB::table('treatments')->insert( [ 'id'=> 17, 'subservice_id'=> 6, 'name'=> 'Pies doloridos', 'pvp'=> 40.00 ] );

    }
}

<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('states')->Insert([
        'country_id'    => '7',
        'name'          => 'Antananarivo',
        'status'        => '1',
        'created_at'    => date("Y-m-d H:i:s"),
        'updated_at'    => date("Y-m-d H:i:s"),
      ]);

      DB::table('states')->Insert([
        'country_id'    => '7',
        'name'          => 'Antsiranana',
        'status'        => '1',
        'created_at'    => date("Y-m-d H:i:s"),
        'updated_at'    => date("Y-m-d H:i:s"),
      ]);

      DB::table('states')->Insert([
        'country_id'    => '7',
        'name'          => 'Fianarantsoa',
        'status'        => '1',
        'created_at'    => date("Y-m-d H:i:s"),
        'updated_at'    => date("Y-m-d H:i:s"),
      ]);

      DB::table('states')->Insert([
        'country_id'    => '7',
        'name'          => 'Mahajanga',
        'status'        => '1',
        'created_at'    => date("Y-m-d H:i:s"),
        'updated_at'    => date("Y-m-d H:i:s"),
      ]);

      DB::table('states')->Insert([
        'country_id'    => '7',
        'name'          => 'Toamasina',
        'status'        => '1',
        'created_at'    => date("Y-m-d H:i:s"),
        'updated_at'    => date("Y-m-d H:i:s"),
      ]);

      DB::table('states')->Insert([
        'country_id'    => '7',
        'name'          => 'Toliara',
        'status'        => '1',
        'created_at'    => date("Y-m-d H:i:s"),
        'updated_at'    => date("Y-m-d H:i:s"),
      ]);
    }
}

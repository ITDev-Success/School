<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Province Antananarivo (state_id = 1)
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '1', 'name' => 'Antananarivo',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '1', 'name' => 'Antsirabe',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '1', 'name' => 'Ambatolampy',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '1', 'name' => 'Tsiroanomandidy',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '1', 'name' => 'Miarinarivo',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // Province Antsiranana (state_id = 2)
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '2', 'name' => 'Antsiranana',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '2', 'name' => 'Nosy Be',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '2', 'name' => 'Sambava',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '2', 'name' => 'Antalaha',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // Province Fianarantsoa (state_id = 3)
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '3', 'name' => 'Fianarantsoa',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '3', 'name' => 'Mananjary',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '3', 'name' => 'Manakara',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '3', 'name' => 'Ambositra',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // Province Mahajanga (state_id = 4)
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '4', 'name' => 'Mahajanga',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '4', 'name' => 'Maintirano',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '4', 'name' => 'Antsalova',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // Province Toamasina (state_id = 5)
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '5', 'name' => 'Toamasina',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '5', 'name' => 'Ambatondrazaka',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '5', 'name' => 'Moramanga',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '5', 'name' => 'Sainte-Marie',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);

        // Province Toliara (state_id = 6)
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '6', 'name' => 'Toliara',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '6', 'name' => 'Morondava',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '6', 'name' => 'Fort-Dauphin',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('cities')->Insert([
            'country_id' => '7', 'state_id' => '6', 'name' => 'Ambovombe',
            'status' => '1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}

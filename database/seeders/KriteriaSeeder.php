<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 1; $i++){
            DB::table('kriterias')->insert([
    			'kriteria_hafalan' => (40),
    			'kriteria_tajwid' => (30),
    			'kriteria_nada' => (30)
    		]);
        }
    }
}

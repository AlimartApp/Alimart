<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
            DB::table('pesertas')->insert([
    			'nama' => $faker->name,
    			'nilai_hafalan' => $faker->numberBetween(20,19,18),
    			'nilai_tajwid' => $faker->numberBetween(30,28,25),
    			'nilai_nada' => $faker->numberBetween(30,23,28)
    		]);
        }
    }
}
<?php

use Illuminate\Database\Seeder;

class 14104_web2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
		
		$limit = 20;
		
		for ($i = 0; $i <$limit; $i++){
			DB::table('14104_model_mahasiswa')->insert([ //mengisi data di database
				'name' => $faker->name,
				'email' => $faker->unique()->email,	//email unique sehingga tidak ada yang sama
				'password' => $faker->password,
				'macAddress' => $faker -> address,
			]);
		}
    }
}

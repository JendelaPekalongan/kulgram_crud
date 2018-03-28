<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//		 DB::table('contacts')->truncate();

        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
        	$contacts[] = [
        		'nama' => $faker->name,
        		'alamat' => "{$faker->streetName} {$faker->postcode} {$faker->city}",
        		'hobi' => $faker->company,
        		'no_hp' => $faker->phoneNumber,
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime
        	];
        }

        DB::table('contacts')->insert($contacts);
    }
}

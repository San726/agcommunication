<?php

use Illuminate\Database\Seeder;

class clientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'status' => 'free',
            'gender' => 'female',

            'area' => str_random(10),
            'username' => str_random(7),

            'Father' => str_random(6),
            'Mother' => str_random(6),
            'Company' => str_random(8),
            'gender' => 'female',
            'dob' => \Carbon\Carbon::now(),


            'PermanentAddress' => str_random(17),
            'PresentAddress' => str_random(17),
            'phone' => random_int(10,11),
            'connectedFrom' => \Carbon\Carbon::now(),
            'bill' => random_int(500,2000),
            'dataScheme' => random_int(1,10),
            'payment' => random_int(1,31),
            'comment' => str_random(200),
            'paidStatus' => 'due',
        ]);
    }
}

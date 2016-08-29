<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class Seed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:Databaseseed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Database seeding';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
//            DB::table('clients')
//                        ->update(['paidStatus' => 'due']);
//
//        $dates = date("Y/m/d");
//        list($year, $month, $day) = mb_split( '[/.-]', $dates);
//
//        $name = 'bill_'.$month.'_'.$year;
//
//        Schema::create($name, function (Blueprint $table) {
//
//            $table->string('username')->unique();
////            $table->string('password');
//            $table->bigInteger('receipt')->unique();
////            $table->Integer('payment');
//
//            $table->string('method');
//            $table->string('type');
//
//            $table->Integer('bill');
//            $table->string('Month');
//
//            $table->Integer('billentrydate');
//            $table->longText('comment');
//
//            $table->increments('id');
//            $table->integer('ref');
//            $table->timestamps();
//            $table->string('entrydoneby');
//        });

        DB::table('clients')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'status' => 'free',
            'gender' => 'female',

//            'area' => str_random(10),
            'area' => 'Ibrahimpur',
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
        $this->info('succesfully');
    }
}

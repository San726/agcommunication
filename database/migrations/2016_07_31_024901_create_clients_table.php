<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {

            $table->string('area');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('email');

            $table->string('Father');
            $table->string('Mother');
            $table->string('Company');
            $table->string('gender');
            $table->string('dob');

            $table->longText('PresentAddress');
            $table->longText('PermanentAddress');

            $table->string('connectedFrom');
            $table->bigInteger('phone');
            $table->Integer('bill');
            $table->smallInteger('dataScheme');
            $table->Integer('payment');
            $table->text('status');
            $table->longText('comment');

            $table->increments('id');
            $table->timestamps();
            $table->string('paidStatus');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}

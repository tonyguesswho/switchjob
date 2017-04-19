<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //remove user related fields and add user id
        Schema::create('developers', function(Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('years_of_experience')->nullable();
            $table->text('pass_work')->nullable();
            $table->text('coolest_thing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('developers');
    }
}

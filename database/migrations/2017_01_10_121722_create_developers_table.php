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
            $table->increments('id');
            $table->integer('user_id');
            $table->string('years_of_experience');
            $table->text('pass_work');
            $table->text('coolest_thing');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLiveProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_projects', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id');
            $table->integer('developer_user_id');
            $table->string('start_date');
            $table->string('duration');
            $table->string('status');
            $table->string('end_date');
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
        Schema::drop('live_projects');
    }
}

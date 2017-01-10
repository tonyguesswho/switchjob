<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('job_type_id');
            $table->integer('platform_type_id');
            $table->text('description');
            $table->text('example_app');
            $table->string('job_attachment');
            $table->string('start_date');
            $table->string('job_scope');
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
        Schema::drop('jobs');
    }
}

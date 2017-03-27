<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyprojects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name')->nullable();
            $table->string('budget')->nullable();
            $table->text('project_description')->nullable();
            $table->date('deadline')->nullable();
            $table->text('skill_set')->nullable();
            $table->string('project_availability')->nullable();
            $table->integer('company_id')->nullable();
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
        Schema::dropIfExists('companyprojects');
    }
}

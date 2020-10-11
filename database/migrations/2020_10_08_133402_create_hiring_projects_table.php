<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiringProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hiring_projects',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('organization');
            $table->string('address');
            $table->string('project_name');
            $table->string('technologies');
            $table->string('complete_date');
            $table->integer('budget');
            $table->text('project_description');
            $table->text('files');
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
        //
    }
}

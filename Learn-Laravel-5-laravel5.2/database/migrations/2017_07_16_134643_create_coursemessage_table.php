<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursemessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('coursemessages',function(Blueprint $table){  
            $table->string('course_no');
            $table->string('course_name');
            $table->float('credit_hour');
            $table->integer('course_hour');
            $table->primary('course_no');
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
        Schema::drop('coursemessage');
    }
}

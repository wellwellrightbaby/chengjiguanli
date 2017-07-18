<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoretableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('scoretables',function(Blueprint $table){  
            $table->string('stu_noo');
            $table->string('course_noo');
            $table->string('term');
            $table->float('score');
            $table->foreign('stu_noo')->references('stu_no')->on('stumessages');
            $table->foreign('course_noo')->references('course_no')->on('coursemessage');
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
        Schema::drop('scoretable');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStumessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('stumessages',function(Blueprint $table){
            $table->string('stu_no');
            $table->string('stu_name');
            $table->string('sex');
            $table->date('birthday');
            $table->string('native');
            $table->string('class_no');
            $table->primary('stu_no');
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
        Schema::drop('stumessages');
    }
}

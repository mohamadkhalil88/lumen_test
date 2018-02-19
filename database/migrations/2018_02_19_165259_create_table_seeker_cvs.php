<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSeekerCvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('seeker_cvs')) {
            Schema::create('seeker_cvs', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('seeker_id')->nullable()->unsigned();
                $table->string('filepath');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seeker_cvs');
    }
}

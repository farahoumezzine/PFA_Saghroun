<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nic');
            $table->string('firstname');

            $table->string('lastname');
            $table->string('phone');
            $table->string('address');
            $table->string('email');
            $table->date('dateofbirth');
            $table->string('password');
            $table->string('confirmpassword');
            $table->string('gender');
            $table->string('status');
            $table->string('type_degree');
            $table->string('languages');
            $table->string('filename');
            $table->string('imagename');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}

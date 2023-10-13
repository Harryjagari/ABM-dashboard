<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Address');
            $table->string('Email')->unique();
            $table->string('Phone');
            $table->string('Mobile');
            $table->string('Website');
            $table->string('Company');
            $table->text('Inquiry_for');
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
        $table->dropForeign(['user_id']); 
        $table->dropColumn('user_id');
    }
};

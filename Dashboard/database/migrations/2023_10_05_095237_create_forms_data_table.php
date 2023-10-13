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
        Schema::create('forms_data', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('value');
            $table->string('form', 255);
            $table->integer('user_id');
            $table->string('saved_by', 255);
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
        Schema::dropIfExists('forms_data');
    }
};

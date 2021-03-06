<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model_name');
            $table->boolean('active')->default(0);
            $table->integer('created_by')->unsigned();
            $table->boolean('p_create_active')->default(0);
            $table->boolean('p_read_active')->default(0);
            $table->boolean('p_update_active')->default(0);
            $table->boolean('p_delete_active')->default(0);
            $table->timestamps();
        });

        Schema::table('models', function($table) {
            $table->foreign('created_by')->references('id')->on('users');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('step1')->nullable();
            $table->longtext('step2')->nullable();
            $table->longtext('step3')->nullable();
            $table->longtext('step4')->nullable();
            $table->longtext('step5')->nullable();
            $table->longtext('step6')->nullable();
            $table->longtext('step7')->nullable();
            $table->longtext('step8')->nullable();
            $table->longtext('step9')->nullable();
            $table->longtext('step10')->nullable();
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
        Schema::dropIfExists('forms');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',80)->unique();
            $table->string('route',80)->nullable();
            $table->string('title',20);
            $table->tinyInteger('status')->default(1);
            $table->integer('pid');
            $table->string('icon',255)->nullable();
            $table->integer('isMenu')->default(0);
            $table->integer('display')->default(0);
            $table->string('stitle',20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_rules');
    }
}

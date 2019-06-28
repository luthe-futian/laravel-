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
            $table->string('title',20);
            $table->tinyInteger('status')->default(1);
            $table->integer('pid');
            $table->string('condition',100);
            $table->string('icon',255);
            $table->integer('isnav')->default(0);
            $table->string('stitle',20);
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
        Schema::dropIfExists('auth_rules');
    }
}

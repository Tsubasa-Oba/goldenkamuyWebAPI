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
        Schema::create('characters', function (Blueprint $table) {
            $table->id()->comment('登場人物ID');
            $table->string('name', 100)->comment('登場人物');
            $table->integer('team_id')->comment('所属組織ID');
            $table->integer('age')->nullable()->comment('年齢');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->id('team_id')->comment('所属組織ID');
            $table->string('team_name', 100)->comment('所属組織');
            $table->timestamps();
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
        Schema::dropIfExists('characters');
        Schema::dropIfExists('teams');
    }
};

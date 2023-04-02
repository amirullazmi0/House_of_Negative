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
        Schema::create('releases', function (Blueprint $table) {
            $table->id();
            $table->string('talent_name');
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('talent_id');
            $table->foreignId('category_id');
            $table->longtext('desc');
            $table->longtext('excerpt');
            $table->string('email');
            $table->string('instagram');
            $table->string('artwork')->nullable();
            $table->string('talent_photo')->nullable();
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
        Schema::dropIfExists('releases');
    }
};

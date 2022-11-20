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
        Schema::create('waste_types', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug');
            $table->string('profile_photo_path')->nullable();
            $table->string('about',255)->nullable();
            $table->timestamps();
        });

        Schema::create('waste_type_post', function (Blueprint $table) {
            $table->integer('post_id');
            $table->integer('waste_type_id');
            $table->primary(['post_id','waste_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waste_type');
        Schema::dropIfExists('waste_type_post');
    }
};

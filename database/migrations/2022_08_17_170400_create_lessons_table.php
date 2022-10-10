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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_id')->nullable()->default(0);
            $table->string('type')->nullable()->default('free');
            $table->string('name')->nullable()->default('Course Name');
            $table->string('slug')->nullable()->default('course-name');
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->bigInteger('thumbnail_id')->nullable()->default(0);
            $table->string('video_url')->nullable();
            
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
        Schema::dropIfExists('lessons');
    }
};

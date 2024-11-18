<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('custom_seo_page', function (Blueprint $table) {
            $table->id();
            $table->string('home_seo_heading')->nullable();
            $table->string('home_seo_title')->nullable();
            $table->text('home_seo_description')->nullable();
            $table->string('home_seo_keywords')->nullable();

            $table->string('about_seo_heading')->nullable();
            $table->string('about_seo_title')->nullable();
            $table->text('about_seo_description')->nullable();
            $table->string('about_seo_keywords')->nullable();

            $table->string('video_seo_heading')->nullable();
            $table->string('video_seo_title')->nullable();
            $table->text('video_seo_description')->nullable();
            $table->string('video_seo_keywords')->nullable();

            $table->string('tuyen_dung_seo_heading')->nullable();
            $table->string('tuyen_dung_seo_title')->nullable();
            $table->text('tuyen_dung_seo_description')->nullable();
            $table->string('tuyen_dung_seo_keywords')->nullable();
            $table->integer('author_id');
            $table->timestamps();
        });

        Schema::create('custom_seo_page_lvkd', function (Blueprint $table) {
            $table->id();
            $table->string('xnk_seo_heading')->nullable();
            $table->string('xnk_seo_title')->nullable();
            $table->text('xnk_seo_description')->nullable();
            $table->string('xnk_seo_keywords')->nullable();

            $table->string('ecommerce_seo_heading')->nullable();
            $table->string('ecommerce_seo_title')->nullable();
            $table->text('ecommerce_seo_description')->nullable();
            $table->string('ecommerce_seo_keywords')->nullable();

            $table->string('kd_seo_heading')->nullable();
            $table->string('kd_seo_title')->nullable();
            $table->text('kd_seo_description')->nullable();
            $table->string('kd_seo_keywords')->nullable();
            $table->integer('author_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_seo_page');
        Schema::dropIfExists('custom_seo_page_lvkd');
    }
};

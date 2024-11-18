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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('category_id'); // Thêm trường category_id
            $table->integer('author_id');
            $table->timestamp('published_at')->nullable();
            $table->string('slug')->unique();
            $table->integer('views');
            $table->timestamps();

            // Thiết lập khóa ngoại
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};

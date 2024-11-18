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
        Schema::create('media', function(Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('file_name');
            $table->string('alt')->nullable();
            $table->string('url');
            $table->string('width');
            $table->string('height');
            $table->string('file_size');
            $table->string('user_id');
            $table->string('post_id')->nullable();
            $table->string('description')->nullable();
            $table->string('file_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

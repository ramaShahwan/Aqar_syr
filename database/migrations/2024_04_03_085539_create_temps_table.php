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
        Schema::create('temps', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
        $table->string('purpose')->nullable();
        $table->integer('room')->nullable();
        $table->integer('bathroom')->nullable();
        $table->string('price')->nullable();
        $table->string('state')->nullable();
        $table->string('space')->nullable();
        $table->string('direction')->nullable();
        $table->string('license')->nullable();
        $table->string('floor')->nullable();
        $table->string('description')->nullable();
        $table->string('meter_price')->nullable();
        $table->string('street_width')->nullable();
        $table->string('location')->nullable();
        $table->string('features')->nullable();
        $table->string('estate_image')->nullable();
        $table->string('estate_video')->nullable();
        $table->string('detaills_address')->nullable();
        $table->string('note')->nullable();
        $table->string('status_')->nullable();
        $table->string('reason')->nullable();
        $table->integer('building_rank')->nullable();
        $table->foreignId('neighborhood_id')->constrained()->cascadeOnDelete()->nullable();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete()->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};

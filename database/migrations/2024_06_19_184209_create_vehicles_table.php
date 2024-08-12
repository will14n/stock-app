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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->string('version')->nullable();
            $table->string('color')->nullable();
            $table->integer('kilometer');
            $table->string('fuel')->nullable();
            $table->string('transmission')->nullable();
            $table->integer('door')->nullable();
            $table->decimal('price', 12, 2);
            $table->string('supplier')->nullable();
            $table->integer('synced_id')->unique();
            $table->dateTime('synced_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};

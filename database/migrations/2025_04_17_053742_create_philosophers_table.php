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
        Schema::create('philosophers', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("life")->nullable();
            $table->string("school")->nullable();
            $table->mediumText("notes")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('philosophers');
    }
};

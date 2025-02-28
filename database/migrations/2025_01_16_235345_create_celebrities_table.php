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
        Schema::create('celebrities', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->longText('bio')->nullable();
            $table->enum('gender', ['Male', 'Female' ,'Transgender'])->nullable();
            $table->boolean('trending')->default(0);

            $table->longText('image-1')->nullable();
            $table->longText('image-2')->nullable();
            $table->longText('image-3')->nullable();
            $table->longText('image-4')->nullable();

            $table->string('instagram')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celebrities');
    }
};

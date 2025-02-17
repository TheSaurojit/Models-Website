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
        Schema::create('posts', function (Blueprint $table) {

            $table->id();

            $table->foreignId('celebrity_id')->constrained()->onDelete('cascade');

     //     $table->foreignId('author_id')->nullable()->constrained()->onDelete('set null');

            $table->boolean('trending')->default(0);

            $table->text('title');

            $table->text('slug');

            $table->text('keywords')->nullable();

            $table->text('description')->nullable();

            $table->text('image_caption')->nullable();

            $table->longText('thumbnail');

            $table->longText('blog');

            $table->timestamps();
            
            $table->softDeletes();  // Adds a 'deleted_at' column
            
            //$image->portrait()

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');
            $table->timestamps();
              
            
            // $table->foreignId('parent_id')->nullable()->constrained('categories')->cascadeOnDelete(); // For subcategories
        });


       

        // Schema::create('posts', function (Blueprint $table) {
        //     $table->id();

        //     $table->foreignId('category_id')->constrained()->onDelete('cascade');

        //     $table->foreignId('author_id')->nullable()->constrained()->onDelete('set null');

        //     $table->boolean('trending')->default(0);

        //     $table->text('title');

        //     $table->longText('slug');

        //     $table->longText('blog');

        //     $table->longText('thumbnail');

        //     $table->longText('description')->nullable();

        //     $table->text('image_caption')->nullable();

        //     $table->text('keywords')->nullable();

        //     $table->timestamps();

        //     $table->softDeletes();  // Adds a 'deleted_at' column
        // });

        
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');

        
        // Schema::dropIfExists('posts');

    }
};

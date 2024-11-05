<?php

// database/migrations/xxxx_xx_xx_create_products_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->decimal('price', 10, 2);
            $table->text('image_url')->nullable();
            $table->text('description')->nullable();
            $table->string('manufacturer', 255)->nullable();
            $table->integer('stock')->default(0);
            $table->timestamps();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}


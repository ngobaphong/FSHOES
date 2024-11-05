<?php

// database/migrations/xxxx_xx_xx_create_order_details_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->timestamps();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}


<?php

// database/migrations/xxxx_xx_xx_create_orders_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_amount', 10, 2);
            $table->text('shipping_address');
            $table->string('status', 50)->default('pending');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

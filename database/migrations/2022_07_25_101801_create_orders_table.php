<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('post_code')->nullable();
            $table->text('address')->nullable();
            $table->text('notes')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_method')->nullable();
            $table->text('transaction')->nullable();
            $table->string('currency')->nullable();
            $table->float('amount',8,2)->nullable();
            $table->string('order_number')->nullable();
            $table->string('invoice_no')->nullable();
            // $table->string('order_date')->nullable();
            // $table->string('order_month')->nullable();
            // $table->string('order_year')->nullable();
            // $table->string('confirmed_date')->nullable();
            // $table->string('processing_date')->nullable();
            // $table->string('picked_date')->nullable();
            // $table->string('shipped_date')->nullable();
            // $table->string('delivered_date')->nullable();
            // $table->string('cancel_date')->nullable();
            // $table->string('return_date')->nullable();
            // $table->string('return_reason')->nullable();
            $table->string('status')->nullable();
   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

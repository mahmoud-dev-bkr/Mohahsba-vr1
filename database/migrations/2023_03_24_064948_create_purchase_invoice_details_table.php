<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_invoice_details', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable();
            $table->integer('purchase_invoice_id')->nullable();
            $table->integer('qun')->nullable();
            $table->text('withDescunt')->nullable()->default('off');
            $table->integer('descunt')->nullable()->default(0);
            $table->integer('price_after')->nullable();
            $table->integer('price_before')->nullable();
            $table->integer('with')->nullable();
            $table->integer('tax')->nullable();
            $table->integer('type')->nullable();
            $table->integer('tax_value')->nullable();
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
        Schema::dropIfExists('purchase_invoice_details');
    }
}

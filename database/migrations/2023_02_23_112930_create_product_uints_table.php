<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductUintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_uints', function (Blueprint $table) {
            $table->id();
            $table->integer('id_unit')->nullable()->default(12);
            $table->integer('price_buy')->nullable()->default(12);
            $table->integer('price_sell')->nullable()->default(12);
            $table->char('is_buy_tex', 25)->default('text');
            $table->char('is_sell_text', 25)->default('text');
            $table->text('barcode')->nullable()->default('text');
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
        Schema::dropIfExists('product_uints');
    }
}

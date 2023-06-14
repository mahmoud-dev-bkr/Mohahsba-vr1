<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->integer('journal_id')->nullable(); // insert ids from all tables [ bounds , BoundSuppleries, invoice ]
            /**
             * 1 => فاتورة مشتريات
             * 2 => فاتورة مبيعات
             * 3 => سندات مشتريات
             * 4 => سندات مبيعات
             * 5 => قيود سهله
             * 6 => قيود يدوية
             */
            $table->integer('type')->nullable(); 
            $table->integer('acount_from')->nullable(); 
            $table->integer('acount_to')->nullable(); 
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
        Schema::dropIfExists('journals');
    }
}

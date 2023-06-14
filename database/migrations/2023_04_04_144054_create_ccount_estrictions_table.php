<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcountEstrictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccount_estrictions', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id')->nullable();
            $table->integer('type')->nullable(); // [ 1 => , 2 => , 3 => , 4 +> , 5=> ]
            $table->text('account_type')->nullable(); // connect with all table
            $table->integer('ammount_from')->nullable();
            $table->integer('ammount_to')->nullable();
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
        Schema::dropIfExists('ccount_estrictions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jangbuis', function (Blueprint $table) {
            $table->id();
			$table->date("purchase_date");
			$table->integer("reserveds_id");
			$table->integer("food_id");
			$table->integer("drinks_id");
			$table->integer("total_price");
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
        Schema::dropIfExists('jangbuis');
    }
};

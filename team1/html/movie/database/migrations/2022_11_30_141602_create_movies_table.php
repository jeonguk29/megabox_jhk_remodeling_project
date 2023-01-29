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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
			$table->string('name', 20);
			$table->integer('rating');
			$table->string('director', 20);
			$table->integer('playingtime');
			$table->date('release_date');
			$table->string('publisher', 20);
			$table->text('video')->nullable();
			$table->text('pic1')->nullable();
			$table->text('pic2')->nullable();
			$table->text('pic3')->nullable();
			$table->text('description');
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
        Schema::dropIfExists('movies');
    }
};

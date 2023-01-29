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
        Schema::create('reserves', function (Blueprint $table) {
        $table->id();
		$table->integer('members_id')->nullable(); // 소대
		$table->string('members_uid',20);  //  회원id
		$table->integer('movies_id')->nullable(); // 소대
		$table->integer('theaters_id')->nullable(); // 영화관 정보 (지역)
		$table->integer('rooms_id')->nullable();
		$table->date('dday')->nullable(); // 예매날짜
		$table->string('time',100); // 예매시간		
		$table->integer('adult');
		$table->integer('teen');
		$table->integer('child');
		$table->integer('disabledperson');
		$table->integer('total')->nullable();
		$table->string('seat',100); // 예매시간	
	
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
        Schema::dropIfExists('reserves');
    }
};

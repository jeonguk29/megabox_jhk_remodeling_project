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
        Schema::create('members', function (Blueprint $table) {
			$table->id();
			$table->string('name',20); 
			$table->string('uid',20); 
			$table->string('passwd',30);
			$table->string('email',20); 
			$table->string('tel',11)->nullable(); // 전화번호
			$table->integer('rank')->nullable()->default(0); // 등급
			$table->date('birthday')->nullable(); // 생일 
			$table->string('juso',100); // 집 주소 
			$table->string('pic',255)->nullable(); // 프로필 사진
			
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
        Schema::dropIfExists('members');
    }
};

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
        Schema::create('user_premiums_', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->constrained('packages'); // buat forein key ambil id package dari table package 
            $table->foreignId('user_id')->constrained('users');
            $table->date('end_of_subscription');
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
        Schema::dropIfExists('user_premiums_');
    }
};

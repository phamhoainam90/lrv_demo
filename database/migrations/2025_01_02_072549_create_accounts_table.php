<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('name', 128)->index();
            $table->string('email', 128)->index();
            $table->char('password', 64);
            $table->dateTime('last_login_datetime');
            $table->text('memo')->nullable();
            $table->char('del_flag', '1')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password', 255);
            $table->string('name', 255)->nullable();
            $table->string('display_name', 255)->nullable();
			$table->string('bio', 255)->nullable();
            $table->string('social_meta', 255)->nullable();
            $table->tinyinteger('role')->default(0);
            $table->tinyinteger('status')->default(0);
			$table->ipAddress('ip_address')->nullable();
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}

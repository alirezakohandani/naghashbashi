<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('username')->nullable()->index();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->tinyInteger('is_admin')->default(2)->index();
            $table->string("status")->default(1)->index();
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_confirmed_at')->nullable();
            $table->string("mobile")->unique()->index();
            $table->timestamp("mobile_confirmed_at")->nullable()->index();
            $table->string("code_melli")->nullable()->index();
            $table->timestamp("code_melli_confirmed_at")->nullable()->index();
            $table->string('password')->nullable();
            $table->boolean("password_force_change")->default(0);
            $table->timestamp("password_expires_at")->nullable();
            $table->string("avatar")->default("default-avatar.png");
            $table->string("otp")->nullable();
            $table->timestamp("otp_expires_at")->nullable();
            $table->string("gender")->nullable();
            $table->timestamp("birth_at")->nullable();
            $table->rememberToken();
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

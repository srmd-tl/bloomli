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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //gh attributes
            $table->string('github_id')->nullable();
            $table->string('github_token')->nullable();
            $table->string('github_refresh_token')->nullable();

            //linkedin attributes
            $table->string('google_id')->nullable();
            $table->string('google_token')->nullable();
            $table->string('google_refresh_token')->nullable();

            //linkedin attributes
            $table->string('linkedin_id')->nullable();
            $table->string('linkedin_token')->nullable();
            $table->string('linkedin_refresh_token')->nullable();

            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('position')->comment('Posting of use i.e UI/UX etc')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
};

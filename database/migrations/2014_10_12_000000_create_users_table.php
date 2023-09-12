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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('prenom');
            $table->string('age');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('niveau_etude');
            $table->string('universite');
            $table->string('pp');
            $table->string('desc');
            $table->string('amis_id')->nullable()->unsigned();
            $table->foreign('amis_id')->references('id')->on('users');
            $table->string('publication_id')->nullable()->unsigned();
            $table->foreign('publication_id')->references('id')->on('publication');
            $table->string('notification_id')->nullable()->unsigned();
            $table->foreign('notification_id')->references('id')->on('notifications');
            $table->string('message_id')->nullable()->unsigned();
            $table->foreign('message_id')->references('id')->on('messages');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

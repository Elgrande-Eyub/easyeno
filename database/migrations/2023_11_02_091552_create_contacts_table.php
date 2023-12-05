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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('client')->nullable();
            $table->string('email')->nullable();
            $table->string('subject')->nullable();
            $table->string('project')->nullable();
            $table->string('phone')->nullable();
            $table->string('status')->nullable()->default('newRequest');
            $table->string('note')->nullable();
            $table->boolean('isRead')->nullable()->default(0);
            $table->longText('message')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};

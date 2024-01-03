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
        Schema::create('sends', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sender_id');
            $table->enum('send_type', ['individual', 'group']);
            $table->string('recipient')->nullable();
            $table->bigInteger('group_id')->nullable();
            $table->enum('status', ['delivered', 'failed', 'schedule']);
            $table->string('message');
            $table->timestamp('schedule')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sends');
    }
};

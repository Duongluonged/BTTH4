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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('computer_id');
            $table->string('reported_by',50);
            $table->datetime('reported_date');
            $table->text('description');
            $table->enum('urgency', ['Low', 'Medium', 'Hight']);
            $table->enum('status', ['Open', 'In Progress', 'Resolved']);
            $table->foreign('computer_id')->references('id')->on('computers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};

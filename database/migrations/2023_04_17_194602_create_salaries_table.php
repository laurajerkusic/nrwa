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
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emp_no');
            $table->foreign('emp_no')->references('emp_no')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('salary')->nullable()->default(null);
            $table->date('from_date')->nullable(false);
            $table->date('to_date')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};

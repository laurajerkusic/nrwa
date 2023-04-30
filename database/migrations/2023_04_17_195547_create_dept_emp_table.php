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
        Schema::create('dept_emp', function (Blueprint $table) {
            $table->unsignedBigInteger('emp_no');
            $table->char('dept_no')->nullable();
            $table->foreign('emp_no')->references('emp_no')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dept_no')->references('dept_no')->on('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->date('from_date')->primary()->nullable(false);
            $table->date('to_date')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dept_emps');
    }
};

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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('emp_no');
            $table->date('birth_date')->nullable()->default(null);
            $table->string('first_name',14)->nullable()->default(null);
            $table->string('last_name', 16)->nullable(false);
            $table->enum('gender', ['M', 'F'])->nullable(false);
            $table->date('hire_date')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

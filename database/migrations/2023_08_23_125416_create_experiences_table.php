<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // attributes: job_id, job_pos, workplace, job_start_date, job_finish_date, job_desc, job_image
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('job_pos', 100);
            $table->string('workplace');
            $table->string('job_category', 20);
            $table->string('job_start_date', 10);
            $table->string('job_finish_date', 10)->nullable();
            $table->string('job_desc', 250);
            $table->string('job_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};

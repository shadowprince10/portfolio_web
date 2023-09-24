<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // attributes: project_id, project_name, project_details, project_start_date, project_exec_time (in days),
    // project_finish_date, project_image
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name', 100);
            $table->string('project_details', 1000);
            $table->date('project_start_date');
            $table->integer('project_exec_time'); // in days
            $table->date('project_finish_date');
            $table->string('project_image');
            $table->string('project_link', 250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // attributes: certif_id, certif_name, certif_organization, certif_category, certif_desc, certif_date, certif_image
    public function up(): void
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->string('certif_name', 200);
            $table->string('certif_organization', 200);
            $table->string('certif_desc', 200)->nullable();
            $table->string('certif_category', 100);
            /* $table->date('certif_date')->format('Y-m'); */
            $table->string('certif_date', 7);
            $table->string('certif_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certifications');
    }
};

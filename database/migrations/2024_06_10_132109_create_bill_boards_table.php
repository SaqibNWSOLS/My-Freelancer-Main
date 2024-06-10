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
          Schema::create('bill_boards', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id')->nullable();
            $table->string('title', 512)->nullable();
            $table->bigInteger('job_categories_id')->nullable();
            $table->bigInteger('sub_job_categories_id')->nullable();
            $table->text('tags')->charset('utf8mb4')->collation('utf8mb4_bin')->nullable();
            $table->text('pricing_description')->nullable();
            $table->string('img1', 256)->nullable();
            $table->string('img2', 256)->nullable();
            $table->string('img3', 256)->nullable();
            $table->string('video', 256)->nullable();
            $table->string('doc1', 256)->nullable();
            $table->string('doc2', 256)->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_boards');
    }
};

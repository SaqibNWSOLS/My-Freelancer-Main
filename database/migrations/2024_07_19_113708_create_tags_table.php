<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_categories_id')->nullable();
            $table->string('name', 256)->nullable();
            $table->string('slug', 256)->nullable();
            $table->string('icon', 256)->nullable();
            $table->string('status', 256)->nullable();
            $table->timestamps();
        });

        // Insert initial data
        DB::table('tags')->insert([
            [
                'job_categories_id' => 4,
                'name' => 'PHP Developer',
                'icon' => 'uploads/icons/dj-drops-vol-1-instant-download-215102-1721327707.png',
                'status' => 'Active',
                'created_at' => '2024-07-18 13:17:37',
                'updated_at' => '2024-07-19 04:21:52'
            ],
            [
                'job_categories_id' => 4,
                'name' => 'Custom Software Development',
                'icon' => 'uploads/icons/core-components-digital-marketing-1024x585-1721381022.png',
                'status' => 'Active',
                'created_at' => '2024-07-19 04:23:42',
                'updated_at' => '2024-07-19 04:23:42'
            ],
            [
                'job_categories_id' => 6,
                'name' => 'Landing Page',
                'icon' => 'uploads/icons/attachment_98462793-1721381185.jpeg',
                'status' => 'Active',
                'created_at' => '2024-07-19 04:26:25',
                'updated_at' => '2024-07-19 04:26:25'
            ],
            [
                'job_categories_id' => 4,
                'name' => 'Python Developer',
                'icon' => 'uploads/icons/Python Developers_2x-1721381238.png',
                'status' => 'Active',
                'created_at' => '2024-07-19 04:27:18',
                'updated_at' => '2024-07-19 04:27:18'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}

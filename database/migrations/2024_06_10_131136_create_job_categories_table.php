<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateJobCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_categories', function (Blueprint $table) {
            $table->id();
            $table->string('icon', 256)->nullable();
            $table->string('banner', 256)->nullable();
            $table->bigInteger('parent_id')->default(0);
            $table->string('name', 512)->nullable();
            $table->string('slug', 256)->nullable();
            $table->string('status', 256)->nullable();
            $table->timestamps();
        });

        // Insert data
        DB::table('job_categories')->insert([
            ['id' => 1, 'icon' => 'icons/8361102-1721212575.png', 'banner' => 'uploads/banners/1721244964.jpeg', 'parent_id' => null, 'name' => 'Graphics & Design', 'slug' => 'graphics-design', 'status' => 'Active', 'created_at' => '2024-07-17 05:36:15', 'updated_at' => '2024-07-17 14:36:04'],
            ['id' => 2, 'icon' => 'icons/image053-1721212626.png', 'banner' => null, 'parent_id' => 1, 'name' => 'Logo & Brand Identity', 'slug' => 'logo-brand-identity', 'status' => 'Active', 'created_at' => '2024-07-17 05:37:06', 'updated_at' => '2024-07-17 08:27:29'],
            ['id' => 3, 'icon' => 'icons/attachment_98462793-1721212680.jpeg', 'banner' => null, 'parent_id' => 2, 'name' => 'Logo Design', 'slug' => 'logo-design', 'status' => 'Active', 'created_at' => '2024-07-17 05:38:00', 'updated_at' => '2024-07-17 08:27:24'],
            ['id' => 4, 'icon' => 'icons/best-programming-languages-1128x635-1721212738.jpg', 'banner' => 'uploads/banners/1721245005.png', 'parent_id' => null, 'name' => 'Programming & Tech', 'slug' => 'programming-tech', 'status' => 'Active', 'created_at' => '2024-07-17 05:38:58', 'updated_at' => '2024-07-17 14:36:45'],
            ['id' => 5, 'icon' => 'icons/images-1721212843.jpeg', 'banner' => null, 'parent_id' => 4, 'name' => 'Website Development', 'slug' => 'website-development', 'status' => 'Active', 'created_at' => '2024-07-17 05:40:43', 'updated_at' => '2024-07-17 08:27:14'],
            ['id' => 6, 'icon' => 'icons/attachment_98462793-1721213471.jpeg', 'banner' => 'uploads/banners/1721381408.png', 'parent_id' => 5, 'name' => 'Wordpress', 'slug' => 'wordpress', 'status' => 'Active', 'created_at' => '2024-07-17 05:51:11', 'updated_at' => '2024-07-19 04:30:08'],
            ['id' => 7, 'icon' => 'icons/image053-1721213493.png', 'banner' => null, 'parent_id' => 5, 'name' => 'Magento', 'slug' => 'magento', 'status' => 'Active', 'created_at' => '2024-07-17 05:51:33', 'updated_at' => '2024-07-17 08:26:57'],
            ['id' => 8, 'icon' => 'uploads/icons/Apps-1721381535.jpg', 'banner' => null, 'parent_id' => 4, 'name' => 'Application Development', 'slug' => 'application-development', 'status' => 'Active', 'created_at' => '2024-07-17 05:53:34', 'updated_at' => '2024-07-19 04:32:15'],
            ['id' => 9, 'icon' => 'icons/8361102-1721213633.png', 'banner' => null, 'parent_id' => 8, 'name' => 'Bug Fixes', 'slug' => 'bug-fixes', 'status' => 'Active', 'created_at' => '2024-07-17 05:53:53', 'updated_at' => '2024-07-17 08:26:52'],
            ['id' => 10, 'icon' => 'uploads/icons/core-components-digital-marketing-1024x585-1721245355.png', 'banner' => 'uploads/banners/1721245355.jpeg', 'parent_id' => null, 'name' => 'Digital Matketing', 'slug' => 'digital-matketing', 'status' => 'Active', 'created_at' => '2024-07-17 14:42:35', 'updated_at' => '2024-07-17 14:42:35'],
            ['id' => 11, 'icon' => 'uploads/icons/Screen-Shot-2022-01-27-at-11.18.30-am-1721245506.png', 'banner' => 'uploads/banners/1721245506.jpeg', 'parent_id' => null, 'name' => 'Video & Animation', 'slug' => 'video-animation', 'status' => 'Active', 'created_at' => '2024-07-17 14:45:06', 'updated_at' => '2024-07-17 14:45:06'],
            ['id' => 12, 'icon' => 'uploads/icons/Translation-1721245618.png', 'banner' => 'uploads/banners/1721245618.jpeg', 'parent_id' => null, 'name' => 'Writing & Translation', 'slug' => 'writing-translation', 'status' => 'Active', 'created_at' => '2024-07-17 14:46:58', 'updated_at' => '2024-07-17 14:46:58'],
            ['id' => 13, 'icon' => 'uploads/icons/dj-drops-vol-1-instant-download-215102-1721245799.png', 'banner' => 'uploads/banners/1721245727.png', 'parent_id' => null, 'name' => 'Music & Audio', 'slug' => 'music-audio', 'status' => 'Active', 'created_at' => '2024-07-17 14:48:47', 'updated_at' => '2024-07-17 14:49:59'],
            ['id' => 14, 'icon' => null, 'banner' => null, 'parent_id' => 10, 'name' => 'Eamil Markeeting', 'slug' => 'eamil-markeeting', 'status' => 'Active', 'created_at' => '2024-07-19 01:59:08', 'updated_at' => '2024-07-19 01:59:08'],
            ['id' => 15, 'icon' => null, 'banner' => null, 'parent_id' => 10, 'name' => 'Social Media', 'slug' => 'social-media', 'status' => 'Active', 'created_at' => '2024-07-19 01:59:33', 'updated_at' => '2024-07-19 01:59:33'],
            ['id' => 16, 'icon' => null, 'banner' => null, 'parent_id' => 1, 'name' => 'Posts Design', 'slug' => 'posts-design', 'status' => 'Active', 'created_at' => '2024-07-19 02:00:04', 'updated_at' => '2024-07-19 02:00:04'],
            ['id' => 17, 'icon' => null, 'banner' => null, 'parent_id' => 11, 'name' => 'Video Editing', 'slug' => 'video-editing', 'status' => 'Active', 'created_at' => '2024-07-19 02:00:28', 'updated_at' => '2024-07-19 02:00:28'],
            ['id' => 18, 'icon' => null, 'banner' => null, 'parent_id' => 11, 'name' => 'Video Animation', 'slug' => 'video-animation', 'status' => 'Active', 'created_at' => '2024-07-19 02:00:43', 'updated_at' => '2024-07-19 02:00:43'],
            ['id' => 19, 'icon' => null, 'banner' => null, 'parent_id' => 12, 'name' => 'Article Writing', 'slug' => 'article-writing', 'status' => 'Active', 'created_at' => '2024-07-19 02:01:05', 'updated_at' => '2024-07-19 02:01:05'],
            ['id' => 20, 'icon' => null, 'banner' => null, 'parent_id' => 12, 'name' => 'Content Writing', 'slug' => 'content-writing', 'status' => 'Active', 'created_at' => '2024-07-19 02:01:20', 'updated_at' => '2024-07-19 02:01:20'],
            ['id' => 21, 'icon' => null, 'banner' => null, 'parent_id' => 13, 'name' => 'Audio Translation', 'slug' => 'audio-translation', 'status' => 'Active', 'created_at' => '2024-07-19 02:01:46', 'updated_at' => '2024-07-19 02:01:46'],
            ['id' => 22, 'icon' => null, 'banner' => null, 'parent_id' => 13, 'name' => 'Song Writer', 'slug' => 'song-writer', 'status' => 'Active', 'created_at' => '2024-07-19 02:02:10', 'updated_at' => '2024-07-19 02:02:10'],
            ['id' => 23, 'icon' => 'uploads/icons/Apps-1721381576.jpg', 'banner' => 'uploads/banners/1721381594.jpg', 'parent_id' => 8, 'name' => 'Ios Developer', 'slug' => 'ios-developer', 'status' => 'Active', 'created_at' => '2024-07-19 04:32:56', 'updated_at' => '2024-07-19 04:33:14'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_categories');
    }
}

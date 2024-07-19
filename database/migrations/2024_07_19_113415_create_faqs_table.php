<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_categories_id')->nullable();
            $table->string('question', 1026)->nullable();
            $table->text('answer')->nullable();
            $table->string('status', 256)->nullable();
            $table->timestamps();
        });

        // Insert initial data
        DB::table('faqs')->insert([
            [
                'job_categories_id' => 4,
                'question' => 'What are music & audio services?',
                'answer' => 'These are services provided by professional musicians, singers, composers, producers, music technologists and other broad or narrow specialists. Whether you want to polish your new album, need a jingle for an advert or a voiceover for your course, it’s all in Music & Audio.',
                'status' => 'Active',
                'created_at' => '2024-07-18 11:31:51',
                'updated_at' => '2024-07-19 01:45:05'
            ],
            [
                'job_categories_id' => 4,
                'question' => 'How do I choose the right freelancer for my music project?',
                'answer' => 'If you want a mixing engineer, voice over expert or a session musician, Fiverr has the right freelancer for your music project. Decide on your needs, deadlines & budget, browse through the list of professionals, view their portfolios and reviews and always contact the seller before ordering.',
                'status' => 'Active',
                'created_at' => '2024-07-18 11:36:09',
                'updated_at' => '2024-07-19 01:45:12'
            ],
            [
                'job_categories_id' => null,
                'question' => 'How do I find good developers on Fiverr?',
                'answer' => 'Fiverr offers a huge choice of developers, so refine your requirements to determine whether you need a full-stack developer - proficient at both backend (server-side) and frontend (client-side) or a more narrow specialist. Get quotes and discuss your needs with at least 3 developers for an informed decision.',
                'status' => 'Active',
                'created_at' => '2024-07-19 01:26:16',
                'updated_at' => '2024-07-19 01:26:16'
            ],
            [
                'job_categories_id' => null,
                'question' => 'Can I hire developers in less than 48 hours?',
                'answer' => 'Yes, on Fiverr we have developers worldwide available 24/7. If you need urgent bug fixing, have a cyber security emergency or a server load issue, you can be sure that a professional on Fiverr is within reach. Publish a buyer request or make direct contact for best results.',
                'status' => 'Active',
                'created_at' => '2024-07-19 01:26:56',
                'updated_at' => '2024-07-19 01:26:56'
            ],
            [
                'job_categories_id' => null,
                'question' => 'What type of services can I find in Programming & Tech?',
                'answer' => 'Starting with web development for client-side (frontend) and server-side (backend), the category also offers specialists in Wordpress and e-commerce development, mobile or desktop apps, support & cybersecurity, as well as user testing and QA.',
                'status' => 'Active',
                'created_at' => '2024-07-19 01:27:13',
                'updated_at' => '2024-07-19 01:27:13'
            ],
            [
                'job_categories_id' => 6,
                'question' => 'Why should I bring in a freelancer for WordPress development services?',
                'answer' => 'Employing a freelancer for WordPress development services offers several benefits. Freelancers are often more cost-effective compared to agencies, provide personalized attention to your project, have expertise in WordPress development, and can offer flexible working hours to accommodate your project needs.',
                'status' => 'Active',
                'created_at' => '2024-07-19 03:59:11',
                'updated_at' => '2024-07-19 03:59:11'
            ],
            [
                'job_categories_id' => 6,
                'question' => 'What is the difference between a WordPress developer and a WordPress website builder?',
                'answer' => 'A WordPress developer is a professional who specializes in creating and customizing websites using the WordPress platform. They have coding skills and can handle complex tasks like developing custom themes or plugins. On the other hand, a WordPress website builder typically uses pre-designed templates and focuses on creating websites without much coding knowledge.',
                'status' => 'Active',
                'created_at' => '2024-07-19 03:59:50',
                'updated_at' => '2024-07-19 03:59:50'
            ],
            [
                'job_categories_id' => null,
                'question' => 'What factors should I consider when employing a WordPress developer?',
                'answer' => 'When engaging a WordPress developer, consider factors such as their experience in WordPress development, portfolio and samples of previous work, reviews, and ratings from past clients, their communication skills, ability to meet deadlines, and their understanding of your project requirements. It\'s also important to discuss pricing and project scope beforehand.',
                'status' => 'Active',
                'created_at' => '2024-07-19 04:00:09',
                'updated_at' => '2024-07-19 04:00:09'
            ],
            [
                'job_categories_id' => 6,
                'question' => 'What factors should I consider when employing a WordPress developer?',
                'answer' => 'When engaging a WordPress developer, consider factors such as their experience in WordPress development, portfolio and samples of previous work, reviews, and ratings from past clients, their communication skills, ability to meet deadlines, and their understanding of your project requirements. It\'s also important to discuss pricing and project scope beforehand.',
                'status' => 'Active',
                'created_at' => '2024-07-19 04:00:30',
                'updated_at' => '2024-07-19 04:00:30'
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
        Schema::dropIfExists('faqs');
    }
}

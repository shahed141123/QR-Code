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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('website_name')->nullable();
            $table->string('site_motto')->nullable();
            $table->string('site_icon')->nullable();
            $table->text('about')->nullable();
	        $table->text('address_line_one')->nullable();
	        $table->text('address_line_two')->nullable();
            $table->string('system_logo_white')->nullable();
            $table->string('system_logo_black')->nullable();
            $table->string('system_timezone')->nullable(); // assuming timezone is a html text like 'UTC', 'EST', etc valueeee, select option
            $table->string('base_color')->nullable();
            $table->string('base_hover_color')->nullable();
            $table->string('secondary_base_color')->nullable();
            $table->string('secondary_base_hover_color')->nullable();
            $table->string('phone_one', 20)->nullable();
            $table->string('phone_two', 20)->nullable();
            $table->string('whatsapp_number', 20)->nullable();
            $table->string('default_language', 50)->nullable();
	        $table->string('default_currency', 50)->nullable();
            $table->string('contact_email', 100)->nullable();
            $table->string('support_email', 100)->nullable();
            $table->string('info_email', 100)->nullable();
            $table->text('copyright_title')->nullable();
            $table->text('copyright_url')->nullable();
            $table->string('site_title', 250)->nullable();
            $table->text('site_url')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->string('meta_image')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('google_analytics')->nullable();
            $table->text('google_adsense')->nullable();
            $table->string('facebook_url', 255)->nullable();
            $table->string('twitter_url', 255)->nullable();
            $table->string('instagram_url', 255)->nullable();
            $table->string('linkedin_url', 255)->nullable();
            $table->string('pinterest_url', 255)->nullable();
            $table->string('youtube_url', 255)->nullable();
            $table->string('service_days', 100)->nullable();
            $table->string('service_time', 100)->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};

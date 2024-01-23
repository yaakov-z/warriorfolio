<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('background_image')->nullable();
            $table->boolean('background_image_visibility')->default(true);
            $table->boolean('dark_mode')->default(true);
            $table->string('meta_title')->nullable();
            $table->string('meta_author')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_robots')->nullable();
            $table->string('meta_google_site_verification')->nullable();
            $table->string('google_recaptcha_key')->nullable();
            $table->string('google_analytics')->nullable();
            $table->longText('header_scripts')->nullable();
            $table->longText('body_scripts')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

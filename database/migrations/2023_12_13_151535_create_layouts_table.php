<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('layouts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Setting::class)->constrained()->cascadeOnDelete()->cascadeOnDelete();
            // Hero Section
            $table->json('hero');

            // Portfolio Section
            $table->boolean('portfolio_section_fill')->default(false);
            $table->string('portfolio_section_title')->nullable();
            $table->string('portfolio_section_subtitle_text')->nullable();
            // About Section
            $table->boolean('about_section_fill')->default(false);
            $table->string('about_section_title')->nullable();
            $table->string('about_section_subtitle_text')->nullable();
            // Contact Section
            $table->boolean('contact_section_fill')->default(false);
            $table->string('contact_section_title')->nullable();
            $table->string('contact_section_subtitle_text')->nullable();
            $table->string('contact_section_address')->nullable();
            $table->string('contact_section_phone')->nullable();
            $table->string('contact_section_email')->nullable();
            $table->text('contact_section_google_map')->nullable();
            // Clients Section
            $table->boolean('clients_section_fill')->default(false);
            $table->string('clients_section_title')->nullable();
            $table->string('clients_section_subtitle_text')->nullable();
            // Newsletter Section
            $table->string('newsletter_section_title')->nullable();
            $table->string('newsletter_section_subtitle_text')->nullable();
            $table->string('newsletter_section_image')->nullable();
            $table->string('newsletter_section_button_text')->nullable();
            // Footer Section
            $table->boolean('footer_section_fill')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layouts');
    }
};

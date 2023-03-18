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
        Schema::create('pages_settings', function (Blueprint $table) {
            $table->id();
            $table->text('app_description')->nullable();
            $table->string('app_logo')->nullable();
            $table->string('app_favicon')->nullable();
            $table->string('app_name')->nullable();

            $table->string('about_title')->nullable();
            $table->string('about_description')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_description')->nullable();
            $table->string('portfolio_title')->nullable();
            $table->string('portfolio_description')->nullable();
            $table->string('customers_title')->nullable();
            $table->string('customers_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages_settings');
    }
};

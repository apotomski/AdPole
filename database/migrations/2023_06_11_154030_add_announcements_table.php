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
        Schema::create('announcements', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained('users');
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->foreignUuid('category_id')->constrained('categories');
            $table->foreignUuid('province_id')->constrained('provinces');
            $table->string('city', 100)->nullable();
            $table->date('activity_start');
            $table->smallInteger('duration');
            $table->json('tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('announcements', function (Blueprint $table) {
            $table->dropForeign('announcements_user_id_foreign');
        });
        Schema::dropIfExists('announcements');
    }
};

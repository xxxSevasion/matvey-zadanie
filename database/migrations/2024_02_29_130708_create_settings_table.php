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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('address');
            $table->string('logo_img')->nullable();

            $table->string('welcome_text');
            $table->string('welcome_img')->nullable();

            $table->string('conductor_text');
            $table->string('conductor_img')->nullable();

            $table->string('musem_text');
            $table->string('musem_img')->nullable();

            $table->string('pred_footer_text');

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

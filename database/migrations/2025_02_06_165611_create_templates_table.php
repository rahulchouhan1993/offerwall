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
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(true);
            $table->integer('app_id')->nullable(true);
            $table->string('bodyBg','10')->nullable(true);
            $table->string('headerTextColor','10')->nullable(true);
            $table->string('headerButtonBg','10')->nullable(true);
            $table->string('headerButtonColor','10')->nullable(true);
            $table->string('NotificationBg','10')->nullable(true);
            $table->string('notificationText','10')->nullable(true);
            $table->string('offerBg','10')->nullable(true);
            $table->string('offerBgInner','10')->nullable(true);
            $table->string('offerText','10')->nullable(true);
            $table->string('offerInfoBg','10')->nullable(true);
            $table->string('offerInfoText','10')->nullable(true);
            $table->string('offerInfoBorder','10')->nullable(true);
            $table->string('offerButtonBg','10')->nullable(true);
            $table->string('offerButtonText','10')->nullable(true);
            $table->string('footerText','10')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templates');
    }
};

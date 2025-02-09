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
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('postback_report')->default(1)->after('postback_key');
            $table->tinyInteger('conversion_report')->default(1)->after('postback_key');
            $table->integer('unique_id')->nullable(true)->after('id');
            $table->longText('contet')->nullable(true)->after('conversion_report');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

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
        Schema::table('whitepapers', function (Blueprint $table) {
            $table->foreign('industry_id')->references('id')->on('industries');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('whitepapers', function (Blueprint $table) {
            $table->dropForeign(['industry_id']);
        });
    }
};

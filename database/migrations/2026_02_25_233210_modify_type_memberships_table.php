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
         Schema::table('memberships', function (Blueprint $table) {
            $table->string('type')->default('member')->change();
            $table->string('status')->default('inactive')->change();
            $table->double('sold')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('memberships', function (Blueprint $table) {
            $table->string('type');
            $table->string('status')();
            $table->double('sold');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('banks', function (Blueprint $table) {
            if (!Schema::hasColumn('banks', 'upi_id')) {
                $table->string('upi_id')->nullable()->after('message');
            }
            if (!Schema::hasColumn('banks', 'qr_path')) {
                $table->string('qr_path')->nullable()->after('upi_id');
            }
        });
    }

    public function down(): void
    {
        Schema::table('banks', function (Blueprint $table) {
            if (Schema::hasColumn('banks', 'qr_path')) {
                $table->dropColumn('qr_path');
            }
            if (Schema::hasColumn('banks', 'upi_id')) {
                $table->dropColumn('upi_id');
            }
        });
    }
};


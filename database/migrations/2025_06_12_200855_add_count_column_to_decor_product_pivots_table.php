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
        Schema::table('decor_product_pivots', function (Blueprint $table) {
            $table->unsignedBigInteger('count')->after('product_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('decor_product_pivots', function (Blueprint $table) {
            //
        });
    }
};

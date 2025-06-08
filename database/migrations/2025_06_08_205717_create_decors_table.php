<?php

use App\Enum\Decor\DecorStatusEnum;
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
        Schema::create('decors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->text('name');
            $table->mediumText('description')->nullable();
            $table->unsignedInteger('count')->default(0);
            $table->float('price')->default(0);
            $table->integer('status')->default(DecorStatusEnum::ACTIVE->value);
            $table->text('image')->nullable();
            $table->text('video')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decors');
    }
};

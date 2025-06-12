<?php

use App\Enum\Decor\DecorOrderStatusEnum;
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
        Schema::create('decor_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('decor_id');
            $table->string('name');
            $table->string('phone');
            $table->dateTime('order_date');
            $table->text('location');
            $table->text('message')->nullable();
            $table->text('note')->nullable();
            $table->integer('status')->default(DecorOrderStatusEnum::PENDING->value);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decor_orders');
    }
};

<?php

use App\Models\PromoCode;
use App\Models\Shoe;
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
        Schema::create('product_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('post_code');
            $table->string('city');
            $table->string('booking_trx_id');
            $table->string('proof');

            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('sub_total_amount');
            $table->unsignedBigInteger('grand_total_amount');
            $table->unsignedBigInteger('discount_amount');

            $table->text('address');

            $table->foreignIdFor(Shoe::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(PromoCode::class)->constrained()->onDelete('cascade');
            
            $table->boolean('is_paid');

            $table->unsignedInteger('shoe_size');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_transactions');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductTransaction extends Model
{
    protected $guarded = ['id',];

    public static function generateUniqueTrxId()
    {
        $prefix = 'SS';
        do {
            $randomString = $prefix . mt_rand(1000, 9999);
        } while (
            self::where('booking_trx_id', $randomString)->exists()
        );

        return $randomString;
    }

    public function shoe() : BelongsTo {
        return $this->belongsTo(Shoe::class, 'shoe_id');
    }

    public function promoCode() :BelongsTo {
        return $this->belongsTo(PromoCode::class, 'promo_code_id');
    }
}


// public function up(): void
// {
//     Schema::create('product_transactions', function (Blueprint $table) {
//         $table->id();
//         $table->string('name');
//         $table->string('phone');
//         $table->string('email');
//         $table->string('post_code');
//         $table->string('city');
//         $table->string('booking_trx_id');
//         $table->string('proof');

//         $table->unsignedBigInteger('quantity');
//         $table->unsignedBigInteger('sub_total_amount');
//         $table->unsignedBigInteger('grand_total_amount');
//         $table->unsignedBigInteger('discount_amount');

//         $table->text('address');

//         $table->foreignIdFor(Shoe::class)->constrained()->onDelete('cascade');
//         $table->foreignIdFor(PromoCode::class)->constrained()->onDelete('cascade');

//         $table->boolean('is_paid');

//         $table->unsignedInteger('shoe_size');

//         $table->timestamps();
//         $table->softDeletes();
//     });
// }

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    protected $fillable = ['discount_amount', 'code'];
}


// Schema::create('promo_codes', function (Blueprint $table) {
//     $table->id();
//     $table->unsignedBigInteger('discount_amount');
//     $table->string('code');
//     $table->timestamps();
// });
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShoeSize extends Model
{

    protected $fillable = ['shoe_id','size'];

    // public function shoe() : BelongsTo {
    //     return $this->belongsTo(Shoe::class, 'shoe_id');
    // }
}


// $table->id();
//             $table->foreignIdFor(Shoe::class)->constrained()->onDelete('cascade');
//             $table->string('size');
//             $table->timestamps();
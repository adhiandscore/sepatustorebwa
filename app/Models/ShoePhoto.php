<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoePhoto extends Model
{
    protected $fillable = ['shoe_id', 'photo'];
 }

// $table->id();
//             $table->foreignIdFor(Shoe::class)->constrained()->onDelete('cascade');
//             $table->string('photo');
//             $table->timestamps();
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Shoe extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand() : BelongsTo {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    
    public function sizes() : HasMany {
        return $this->hasMany(Brand::class);
    }
    public function photos() : HasMany {
        return $this->hasMany( ShoePhoto::class);
    }
}

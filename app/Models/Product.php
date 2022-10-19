<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $with = ['typeproduct'];
    protected $fillable = ['name', 'id_type', 'description', 'unit_price', 'promotion_price', 'image', 'unit', 'new'];

    public function typeProduct()
    {
        return $this->belongsTo(TypeProduct::class, 'id_type');
    }

    public function billDetails()
    {
        return $this->hasMany(BillDetail::class, 'id_product');
    }

    // protected function unitPrice(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => number_format($value),
    //     );
    // }

    // protected function promotionPrice(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => number_format($value),
    //     );
    // }

    protected function new(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? "new" : "",
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];

    /**
     * Get the images associated with the product.
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Calculate the total price of the product based on quantity.
     *
     * @param  int  $quantity
     * @return float
     */
    public function getTotalPrice($quantity)
    {
        return $this->price * $quantity;
    }
}

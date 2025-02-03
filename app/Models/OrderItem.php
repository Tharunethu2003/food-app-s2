<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id', 'meal_kit_id', 'quantity', 'price'];

    // Define the relationship with MealKit
    public function mealKit()
    {
        return $this->belongsTo(MealKit::class);
    }

    // Define the relationship with Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

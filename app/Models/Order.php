<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'total_amount', 'status'];

    // Define the relationship with the User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with MealKit through OrderItem
    public function mealKits()
    {
        return $this->belongsToMany(MealKit::class, 'order_items')
                    ->withPivot('quantity', 'price');
    }
}

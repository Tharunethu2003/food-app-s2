<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealKit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'picture', 'ingredients', 'category', 'tags',
    ];
    
    // For storing and retrieving the picture URL
    public function getPictureAttribute($value)
    {
        return $value ? asset('storage/meal-kits/' . $value) : null;
    }
    


    public function setPictureAttribute($value)
{
    if (is_file($value)) {
        $this->attributes['picture'] = $value->store('meal-kits', 'public');
    }
}


    // Define the relationship with OrderItem
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Define the relationship with Order through OrderItem
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_items')
                    ->withPivot('quantity', 'price');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'picture',
        'ingredients',
        'category',
        'tags',
        'prep_time', // Add this

    ];
    // Recipe.php (Model)
public function ingredients()
{
    return $this->hasMany(Ingredient::class);
}
// In the Recipe model
protected $casts = [
    'ingredients' => 'array', // Automatically cast ingredients to an array
];


public function reviews()
{
    return $this->hasMany(Review::class);
}


}

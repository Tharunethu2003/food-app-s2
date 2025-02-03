<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Recipe;


class SearchRecipes extends Component
{
    public $query = '';

public function render()
{
    $recipes = Recipe::where('name', 'like', '%'.$this->query.'%')->get();

    return view('livewire.search-recipes', compact('recipes'));
}

}

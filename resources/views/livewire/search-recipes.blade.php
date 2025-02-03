<div>
    <form class="flex w-full max-w-md">
        <input 
            type="text" 
            wire:model="query" 
            placeholder="Look For Recipes" 
            class="border border-green-300 p-2 rounded-l-lg w-full focus:outline-none focus:ring focus:ring-green-400"
        >
    </form>

    <ul class="mt-4">
        @foreach($recipes as $recipe)
            <li class="text-green-700">{{ $recipe->name }}</li>
        @endforeach
    </ul>
</div>

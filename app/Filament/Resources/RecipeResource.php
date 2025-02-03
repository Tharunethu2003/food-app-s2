<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecipeResource\Pages;
use App\Models\Recipe;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Resource;

class RecipeResource extends Resource
{
    protected static ?string $model = Recipe::class;
    protected static ?string $navigationGroup = 'Recipes Management';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                
                Textarea::make('description')
                    ->required(),
                
                TextInput::make('price')
                    ->numeric()
                    ->required(),
                
                FileUpload::make('picture')
                    ->disk('public') // Using the 'public' disk
                    ->directory('images') // This is the relative path under 'storage/app/public'
                    ->image() 
                    ->required(),
                
                
                TagsInput::make('ingredients')
                    ->placeholder('Comma-separated ingredients')
                    ->required()
                    ->helperText('Enter ingredients as a comma-separated list')
                    ->afterStateUpdated(function ($state, $set) {
                        // Check if the state is a string, then split it into an array
                        if (is_string($state)) {
                            $ingredientsArray = explode(',', $state);
                            $set('ingredients', $ingredientsArray);
                        } else {
                            // If state is already an array, just set it
                            $set('ingredients', $state);
                        }
                    }),
                
                

                Textarea::make('instructions')
                    ->required()
                    ->label('Instructions'),

                Select::make('category')
                    ->options([
                        'Vegetarian' => 'Vegetarian',
                        'Non-Veg' => 'Non-Veg',
                    ])
                    ->required(),

                TextInput::make('tags')
                    ->placeholder('Comma-separated tags')
                    ->nullable(),

                TextInput::make('prep_time')
                    ->numeric()
                    ->label('Preparation Time (mins)')
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('picture')
                    ->disk('public')
                    ->square(),

                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('category')
                    ->sortable(),

                TextColumn::make('price')
                    ->sortable()
                    ->formatStateUsing(fn ($state) => 'Rs. ' . number_format($state, 2)),

                TextColumn::make('prep_time')
                    ->sortable()
                    ->label('Prep Time (mins)'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'Vegetarian' => 'Vegetarian',
                        'Non-Veg' => 'Non-Veg',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRecipes::route('/'),
            'create' => Pages\CreateRecipe::route('/create'),
            'edit' => Pages\EditRecipe::route('/{record}/edit'),
        ];
    }
}

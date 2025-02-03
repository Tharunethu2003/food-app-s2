<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class AnalyticsPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar'; // Optional: Set an icon for your page in the navigation
    protected static string $view = 'filament.pages.analytics'; // Set the view for your analytics page

    public function mount()
    {
        $salesData = [12, 19, 3, 5, 2, 3]; // Example data, replace with actual data
        view()->share('salesData', $salesData);
    }
}

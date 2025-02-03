<!-- resources/views/filament/pages/analytics.blade.php -->
<x-filament::page>
    <div class="space-y-6">
        <h1 class="text-3xl font-bold text-green-600">Analytics Overview</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Example: Sales Chart -->
            <div class="p-6 bg-white rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-green-700 mb-4">Sales</h2>
                <canvas id="salesChart" class="h-60"></canvas>
            </div>

            <!-- Example: User Growth -->
            <div class="p-6 bg-white rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-green-700 mb-4">User Growth</h2>
                <canvas id="userGrowthChart" class="h-60"></canvas>
            </div>

            <!-- Example: Traffic Source -->
            <div class="p-6 bg-white rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-green-700 mb-4">Traffic Source</h2>
                <canvas id="trafficSourceChart" class="h-60"></canvas>
            </div>
        </div>
    </div>

    <style>
        .text-green-600 { color: #38a169; }
        .text-green-700 { color: #2f855a; }
        .bg-white { background-color: #ffffff; }
        .shadow-md { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        .h-60 { height: 15rem; }
        .p-6 { padding: 1.5rem; }
    </style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Sales Chart
        const salesData = @json($salesData);  // Passing data from PHP to JavaScript

        const salesCtx = document.getElementById('salesChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'], // x-axis labels
                datasets: [{
                    label: 'Sales',
                    data: salesData, // Use dynamic sales data
                    borderColor: '#38a169',
                    backgroundColor: 'rgba(56, 161, 105, 0.2)',
                    fill: true,
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    tooltip: { enabled: true }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // User Growth Chart (static example)
        const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
        new Chart(userGrowthCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'New Users',
                    data: [30, 45, 35, 50, 70, 90],
                    backgroundColor: '#68d391', // green color for bars
                    borderColor: '#48bb78',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' }
                },
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });

        // Traffic Source Chart (static example)
        const trafficSourceCtx = document.getElementById('trafficSourceChart').getContext('2d');
        new Chart(trafficSourceCtx, {
            type: 'pie',
            data: {
                labels: ['Organic', 'Paid', 'Referral', 'Social'],
                datasets: [{
                    label: 'Traffic Source',
                    data: [50, 20, 15, 15],
                    backgroundColor: ['#38a169', '#48bb78', '#68d391', '#9ae3c0'],
                    borderColor: '#ffffff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    tooltip: { enabled: true }
                }
            }
        });
    </script>
</x-filament::page>

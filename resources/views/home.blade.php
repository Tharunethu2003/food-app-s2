<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm2Plate - Landing Page</title>
    @vite('resources/css/app.css') <!-- Ensure you're using Vite for Laravel -->
</head>
<body class="bg-gray-50">

<!-- Include Navbar Component -->
@include('components.navbar')

<!-- Landing Content -->
<div style="display: flex; flex-direction: column; gap: 3rem; margin-top: 3rem; justify-content: center; align-items: center; flex-wrap: wrap;">
    <div style="width: 100%; max-width: 20rem;">
        <img src="{{ asset('images/image3.jpg') }}" alt="Farm to Plate" style="border-radius: 0.5rem; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
    </div>
    <div style="width: 100%; max-width: 26rem; text-align: center;">
        <h1 style="font-size: 2.5rem; font-weight: 800; color: #2f855a; margin-bottom: 1.5rem;">Welcome to Farm2Plate</h1>
        <p style="font-size: 1.125rem; color: #4a5568; margin-bottom: 1.5rem;">Choose your path to get started!</p>
    </div>
</div>

<!-- Footer -->
<footer style="margin-top: 4rem; text-align: center; padding: 1.5rem; background-color: #38a169; color: white;">
    <p>&copy; 2024 Farm2Plate. All rights reserved.</p>
    <p>Contact us: <a href="mailto:support@farm2plate.com" style="color: white; text-decoration: none;">support@farm2plate.com</a></p>
</footer>

</body>
</html>

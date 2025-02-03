<!DOCTYPE html>
<html lang="en">
<head>

@include('components.navbar')  <!-- Include Navbar Component -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm2Plate - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color: #f5f5f5; font-family: Arial, sans-serif;">

    <!-- Navbar -->
  

    <!-- Landing Section -->
    <section style="display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 32px; gap: 32px;">
        <!-- Left: Image -->
        <div style="width: 100%; max-width: 500px;">
            <img src="https://via.placeholder.com/500x300" alt="Illustrative Image" style="border-radius: 12px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        </div>
        
        <!-- Right: Buttons and Text -->
        <div style="width: 100%; text-align: center;">
            <h1 style="font-size: 32px; font-weight: bold; color: #4B5945; margin-bottom: 16px;">Welcome to Farm2Plate</h1>
            <p style="color: #66785F; margin-bottom: 24px;">Choose your path to get started!</p>
            <div style="display: flex; flex-direction: column; gap: 16px; justify-content: center;">
                <a href="/login-user" style="background-color: #4B5945; color: white; font-weight: bold; padding: 12px 24px; border-radius: 30px; text-align: center; text-decoration: none; transition: background-color 0.3s ease;">Log in as User</a>
                <a href="/login-admin" style="background-color: #66785F; color: white; font-weight: bold; padding: 12px 24px; border-radius: 30px; text-align: center; text-decoration: none; transition: background-color 0.3s ease;">Log in as Admin</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="background-color: #B2C9AD; padding: 24px; margin-top: 32px; text-align: center;">
        <p style="color: #4B5945;">&copy; 2024 Farm2Plate. All rights reserved.</p>
        <p style="color: #4B5945;">Contact us: <a href="mailto:support@farm2plate.com" style="color: #4B5945; text-decoration: none;">support@farm2plate.com</a></p>
    </footer>

</body>
</html>

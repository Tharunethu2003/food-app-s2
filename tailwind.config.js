/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/views/**/*.blade.php",
      "./resources/js/**/*.vue", // If using Vue with Inertia
      "./app/Http/**/*.php", // If using components
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  };
  
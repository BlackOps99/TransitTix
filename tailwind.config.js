import forms from '@tailwindcss/forms';
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        container: {
            center: true,
            padding: "1rem"
        },
        extend: {
            fontFamily: {
                sans: ['"Outfit"'],
            },
        },
    },
    plugins: [
        forms,
        require('flowbite/plugin'),
    ],
};

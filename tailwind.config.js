const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
                noto: ['Noto Serif', 'serif']
            },
            backgroundImage: {
                'sideview': "url('/public/assets/images/bg-img-sideview.jpg')"
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

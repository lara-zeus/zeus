import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import colors from 'tailwindcss/colors'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',

        // filament
        './vendor/filament/**/*.blade.php',
        // Lara Zeus
        './vendor/lara-zeus/**/*.blade.php',
        './src/CoreServiceProvider.php',
    ],

    theme: {
        extend: {
            colors: {
                gray: colors.stone,
                primary: colors.sky,
                secondary: colors.pink,
                danger: colors.red,
                success: colors.green,
                warning: colors.yellow,
                info: colors.blue,
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};

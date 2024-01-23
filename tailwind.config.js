import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import colors from 'tailwindcss/colors'
import preset from './vendor/filament/support/tailwind.config.preset'

/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',

        // filament
        './vendor/filament/**/*.blade.php',

        // Lara Zeus
        './vendor/lara-zeus/**/*.blade.php',
        './src/CoreServiceProvider.php',
        './vendor/lara-zeus/rain/src/Models/Columns.php',
        './vendor/lara-zeus/sky/src/Models/PostStatus.php',
        './vendor/lara-zeus/wind/src/Filament/Resources/LetterResource.php',
        './vendor/lara-zeus/core/src/CoreServiceProvider.php',

        // Filament plugins
        './vendor/ryangjchandler/filament-navigation/resources/**/*.blade.php',
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

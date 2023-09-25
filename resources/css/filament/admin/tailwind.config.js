import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',

        './vendor/lara-zeus/**/*.blade.php',
        `./vendor/lara-zeus/wind/resources/views/filament/**/*.blade.php`,
        `./vendor/lara-zeus/wind/src/Filament/Resources/LetterResource.php`,
        `./vendor/lara-zeus/wind/resources/views/filament/**/*.blade.php`,
        `./vendor/lara-zeus/sky/src/Models/PostStatus.php`,
        `./vendor/lara-zeus/bolt/resources/views/filament/**/*.blade.php`,
        `./vendor/lara-zeus/bolt/resources/views/filament/**/*.blade.php`,
        `./vendor/lara-zeus/rain/resources/views/filament/**/*.blade.php`,

        './vendor/lara-zeus/rain/src/Models/Columns.php',
        './vendor/lara-zeus/wind/src/Filament/Resources/LetterResource.php',
        './vendor/lara-zeus/core/src/CoreServiceProvider.php',

        './vendor/ryangjchandler/filament-navigation/resources/**/*.blade.php',

    ],
}

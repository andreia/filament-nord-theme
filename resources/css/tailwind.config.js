import preset from '../../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
          colors: {
            secondary: {
              50: 'rgba(var(--secondary-50), <alpha-value>)',
              100: 'rgba(var(--secondary-100), <alpha-value>)',
              200: 'rgba(var(--secondary-200), <alpha-value>)',
              300: 'rgba(var(--secondary-300), <alpha-value>)',
              400: 'rgba(var(--secondary-400), <alpha-value>)',
              500: 'rgba(var(--secondary-500), <alpha-value>)',
              600: 'rgba(var(--secondary-600), <alpha-value>)',
              700: 'rgba(var(--secondary-700), <alpha-value>)',
              800: 'rgba(var(--secondary-800), <alpha-value>)',
              900: 'rgba(var(--secondary-900), <alpha-value>)',
              950: 'rgba(var(--secondary-950), <alpha-value>)',
            },
            polarnight: {
                50: "#e5e9f0",  // Lightest (pale version of #2E3440)
                100: "#d1d7e0", // Light shade of #2E3440
                200: "#a7b1c5", // Lighter shade of #3B4252
                300: "#8c9ab3", // Lighter shade of #3B4252
                400: "#71829b", // Lighter shade of #434C5E
                500: "#4c566a", // Base color (#4C566A)
                600: "#434c5e", // Darker shade of #434C5E
                700: "#3b4252", // Darker shade of #3B4252
                800: "#2e3440", // Base color (#2E3440)
                900: "#232831", // Darker shade of #2E3440
                950: "#1b2027"  // Darkest shade, almost black
            },
          },
        },
      },
}

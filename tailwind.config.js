const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/views/**/*.blade.php'
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            primary: colors.indigo,
            gray: colors.blueGray,
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}

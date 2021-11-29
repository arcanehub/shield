const colors = require('tailwindcss/colors')
const theme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/views/**/*.blade.php'
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                primary: colors.indigo,
                gray: colors.blueGray,
            }
        },
        fontFamily: {
            sans: ['Open Sans', ... theme.fontFamily.sans],
            heading: ['Montserrat', ... theme.fontFamily.sans],
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}

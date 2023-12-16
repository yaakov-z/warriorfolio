/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
  ],
  theme: {
      extend: {
          colors: {
              primary: colors.indigo,
              secondary: colors.zinc,
              tertiary: colors.rose,
        }
    },
  },
  plugins: [],
}


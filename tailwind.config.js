const colors = require('tailwindcss/colors')
module.exports = {
  purge: [
    './src/**/*.html',
    './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors :{
      lime :colors.lime,
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

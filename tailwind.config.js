/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "*.{php,js}",
    "templates/*.{php,js}",
    "template-parts/*.{php,js}",
  ],
  theme: {
    extend: {
      screens: {
        xsm: "425px",
        xxl: "1440px",
      }
    },
  },
  plugins: [],
}
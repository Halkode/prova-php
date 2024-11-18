/** @type {import('tailwindcss').Config} */
module.exports = {
  content: require("fast-glob").sync([
    "./**/*.php",
    "./resources/**/*.js",
    "./resources/**/*.scss",
    "./resources/**/*.css",
  ]),
  theme: {
    extend: {
      container: {
        center: true,
        padding: "1rem",
      },
    },
  },
  plugins: [],
};
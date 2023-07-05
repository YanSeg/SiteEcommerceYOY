/** @type {import('tailwindcss').Config} */
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
  "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  "./node_modules/tw-elements/dist/js/**/*.js"
],
theme: {
    extend: {},
},
plugins: [],


darkMode: "class",
plugins: [require("tw-elements/dist/plugin.cjs")]
}



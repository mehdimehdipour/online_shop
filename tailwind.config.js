/** @type {import('tailwindcss').Config} */
module.exports = {
  corePlugins: {
    preflight: false,
  },
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      transitionDuration: {
        '1500': '1500ms',
      }
    },
  },
  plugins: [],
}


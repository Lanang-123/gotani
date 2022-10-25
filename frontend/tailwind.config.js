/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
                'ijo-tua' : '#065C5F',
                'ijo-muda' : '#06B3B9',
                'abu' : '#D9D9D9',
                'ijo-muda2' : '#B3F0F2'
            }
    },
  },
  plugins: [
    require("daisyui"),
    require('flowbite/plugin'),
    require('tailwind-scrollbar-hide')
  ],
}

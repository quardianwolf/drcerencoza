/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js}", "./node_modules/flowbite/**/*.js",
    "./pages/**/*.{js,ts,jsx,tsx}",
    "./components/**/*.{js,ts,jsx,tsx}",
  ],
    theme: {
      
        maxWidth: {
          'max-w-8xl': '904',
        },
        
        
      extend:{
        colors: {
          'tema': '#7e6561',
        },
         container: {
        center: true,
      },},
    },
    plugins: [
        require('flowbite/plugin')
],

  }


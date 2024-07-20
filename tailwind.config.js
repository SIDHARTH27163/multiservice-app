/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
     "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
    fontFamily:{
      Robotoregular:['Roboto-regular'],
      playwrite:['playwrite'],
      Robotomedium:['Roboto-medium'],
      MerriweatherLight:['Merriweather-Light'],
      MerriweatherRegular:['Merriweather-Regular'],
      Montserrat:['Montserrat']

    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}


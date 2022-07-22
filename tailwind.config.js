/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",

  ],
  theme: {
    extend: {




      colors: {
        lesle: '#121212',
        orangee: '#F15A24',
        grey: '#2F2F2F',
      },



      width: {
        'cont1': '73.75rem',
      },

      height: {
        '100vh': '100vh',
      },



    fontFamily: {
      'pop': ['"poppins"'],
    }




    },
  },
  plugins: [],
}

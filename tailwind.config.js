const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
  darkMode: false, // or 'media' or 'class'
  theme: {
      fontFamily: {
          'sans': ['Inter', 'Helvetica', 'Arial', 'sans-serif'],
      },
    extend: {
        colors: {
            orange: colors.orange,
            gray: colors.coolGray,
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

module.exports = {
    purge: [
        './resources/view/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
      ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {
        display: ['focus'],
        backgroundColor: ['active'],
    },
  },
  plugins: [],
}

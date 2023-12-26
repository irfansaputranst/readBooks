/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.{blade.php,vue,js}"],
  theme: {
    extend: {
      fontFamily: {
        montserrat: ['Montserrat'],
        backgroundColor: ['active'],
      }
    },
  },
  plugins: [],
}


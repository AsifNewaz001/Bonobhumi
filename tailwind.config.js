/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        'ghee-gold': '#F59E0B',
        'ghee-cream': '#FCD34D',
        'heritage-green': '#10B981',
        'earth-brown': '#92400E',
      },
      fontFamily: {
        'bengali': ['Noto Sans Bengali', 'SolaimanLipi', 'sans-serif'],
        'english': ['Inter', 'Roboto', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
};
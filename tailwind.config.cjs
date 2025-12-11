/**
 * Tailwind config to include PHP view files so Tailwind can detect classes inside them.
 */
module.exports = {
  content: [
    './src/**/*.{html,php,js,jsx,ts,tsx}',
    './public/**/*.{html,php,js}',
    './**/*.{php,html,js}'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

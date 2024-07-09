/** @type {import('tailwindcss').config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    colors: {
      "primary": "#782aac",
      "yellow": "#Fdde42",
      "green": "#71d154",
      "red": "#e1392c",
      "primary-hover": "#6B2699",
      "primary-pressed": "#62228d",
      "primary-focused": "#300e47",
      "white": "#fff",
      "gray-light": "#c4c0c7",
      "gray-dark": "#645c6a",
      "black": "#000",
    },
    container: {
      screens: {
        xl: '1160px',
      },
    },
    fontFamily: {
      sans: ["Roboto, sans-serif"],
      serif: ["IBM Plex Mono, monospace"],
    },
    extend: {},
  },
  plugins: [],
};

export default config;

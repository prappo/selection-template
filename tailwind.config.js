module.exports = {
  purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily:{
      sans: ['GothamRounded']
    },
    colors:{
      joie: {
        light: '#808285',
        DEFAULT: '#F8A31D',
        dark: '#F8A31D',
      },
      joie_text: {
        
        DEFAULT: '#1b3d6f',
        dark: '#1b3d6f',
      },
      joie_text_light:{
        DEFAULT: '#a5c8e1',
      },
      joie_text_dark:{
        DEFAULT: '#467ec1'
      }
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

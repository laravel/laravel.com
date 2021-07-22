const defaultConfig = require('tailwindcss/defaultConfig');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  important: true,
  purge: [
      'resources/views/**/*.blade.php',
      'resources/js/**/*.js',
  ],
  darkMode: 'class',
  theme: {
    extend: {
        fontSize: {
          '6.5xl': ['4rem', { lineHeight: '1' }],
        },
        maxWidth: {
            xxs: '16rem',
        },
        spacing: {
            224: '56rem',
        },
    },
    boxShadow: {
        none: '0 0 0 0 rgba(0, 0, 0, 0)',
        sm: `0 10px 15px -8px rgba(9, 9, 16, .1)`,
        lg: '0 20px 30px -16px rgba(9, 9, 16, .2)',
        xl: '0 10px 20px 0 rgba(9, 9, 16, .15)',
    },
    colors: {
        transparent: 'transparent',
        black: '#000',
        white: '#fff',
        gray: {
            900: '#090910',
            800: '#222222',
            700: '#2b2e38',
            600: '#777777',
            500: '#93939e',
            400: '#B5B5BD',
            300: '#d7d7dc',
            200: '#e7e8f2',
            100: '#f5f5fa',
            50: '#fbfbfd',
        },
        dark: {
            900: '#12141C',
            800: '#171923',
            700: '#0C0D12',
            600: '#252A37',
            500: '#394056',
        },
        red: {
            900: '#981d15',
            800: '#ca473f',
            700: '#ec0e00',
            600: '#ff2d20',
            500: '#FF7C75',
        },
        orange: {
            600: '#f49d37',
        },
        blue: {
            800: '#055472',
            600: '#0782b1',
            500: '#0AB2F5',
        },
        green: {
            600: '#669900',
            500: '#8FD600',
        },
        purple: {
            600: '#8338ec',
        },
        vapor: '#25c4f2',
        forge: '#1EB786',
        envoyer: '#F56857',
        horizon: '#8C6ED3',
        nova: '#4099DE',
        echo: '#4AB2B0',
        lumen: '#F6AE7A',
        homestead: '#E7801C',
        spark: '#9B8BFB',
        valet: '#5E47CD',
        mix: '#294BA5',
        cashier: '#91D630',
        dusk: '#BB358B',
        passport: '#7DD9F2',
        scout: '#F55D5C',
        socialite: '#E394BA',
        telescope: '#4040C8',
        tinker: '#EC7658',
        jetstream: '#6875f5',
        sail: '#38BDF7',
        sanctum: '#1D5873',
    },
    fontFamily: {
        sans: ['scandia-web', ...defaultTheme.fontFamily.sans],
        mono: ['source-code-pro', ...defaultTheme.fontFamily.mono],
    }
  },
  variants: {
      borderColor: [...defaultConfig.variants.borderColor, 'focus-within'],
      transform: [...defaultConfig.variants.transform, 'group-hover', 'group-focus'],
      translate: [...defaultConfig.variants.translate, 'group-hover', 'group-focus'],
      width: [...defaultConfig.variants.width, 'hover'],
  },
  plugins: [],
}

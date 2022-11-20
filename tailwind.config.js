const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',

    theme: {
        extend: {
            colors:{
              'main-green-light':'#00ff84',
                'main-indigo-light':'#9a5df5',

            },
            brightness:{
                75: '.75',
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            spacing:{
                22:'5.5rem',
                44:'11rem',
                70: '17.5rem',
                76: '19rem',
                104: '26rem',
                128: '32rem',
                175: '43.75rem',
            },
            maxWidth:{
                custom:'68.5rem',
            },
            // width:{
            //     40:'10rem',
            // },
            // fontSize: {
            //     xs:'.75rem',
            // }
            fontSize: {
                xxs: ['0.625rem',{lineHeight: '1rem'}],
            },

        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/line-clamp'),
    ],
    variants:{
        scale: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    },
};


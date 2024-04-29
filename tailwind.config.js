import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            height:{
                "footer":"7vh", // es como decir h-10v => style height: 10vh
                "header":"10vh",
                "body":"75vh",
                "nav":"8vh",
            },
            colors:{
                "header":"#BE0F34", // asigno un color con "varaible"
                'nav':"#bad9dc",
                'main':"#DCE5F4",
                'footer':"#E5E5E5",
            },

        },
    },

    plugins: [forms, require ("daisyui")],
};

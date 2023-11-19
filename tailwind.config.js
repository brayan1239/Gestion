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
            colors: {
                // Personaliza los colores aquí
                dark: {
                  'primary': '#4C51BF', // Ejemplo de cambio en el color primario
                  // Agrega más personalizaciones de colores aquí
                },
              },
        },
    },

    
    plugins: [forms],
};

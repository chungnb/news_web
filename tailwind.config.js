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
            colors: {
                "regal-blue": "#243c5a",
                "color-main-text": "#DDAF28",
                "hover-gray": "#F5F6F7",
                "bl-222": "#222222",
                "gray-666": "#666666",
                "color-444": "#444444",
                'h2': "#1D2258",
                "text-888": "#888888",
                "title-1B": "#1B226B",
                "gray-E0": "#E0E0E0",
                "gray-CCC": "#CCCCCC",
                "gray-888": "#888888",
                "hover-blue": "#0A62D0",
                "blue-0071AF": "#0071AF",
                "blue-1877F2": "#1877F2"
            },
            fontSize: {
                mb: "20px",
                tl: "28px",
                dt: "40px",

                // content
                ct_mb: "12px",
                ct_tl: "16px",
                ct_dt: "18px",
            },
            gradientColorStops: {
                start: "#0A62D0",
                end: "#05326A",
            },
        },
    },

    // plugins: [forms],
};

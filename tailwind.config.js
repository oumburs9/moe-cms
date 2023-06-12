const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        colors: {
            // MoE Branding Colors
            transparent: "transparent",
            current: "currentColor",
            mgray: "#4D4D4D",
            mred: "#D1503E",
            mblue: "#2048A1",
            msky: "#3C8FC3",
            myellow: "#F8BE13",
            mdark: "#191919",
            mlight: "#CCCCCC",
            mwhite: "#F2F2F2",
        },

        // boxShadow: {
        //     sm: "0px 2px 4px 0px rgb(11, .10, .55, 0.0444)",
        //     md: "0px 4px 12px 0px rgb(14, .13, .77, 0.0555)",
        //     lg: "0px 8px 20px 0px rgb(18, .16, .99, 0.0666)",
        // },

        fontFamily: {
            gotham: "'Gotham', 'sans serif'",
            noto: "'Noto', 'sans serif'",
        },

        extend: {},
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("flowbite/plugin"),
    ],
};

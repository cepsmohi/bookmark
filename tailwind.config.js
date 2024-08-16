/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./app/Http/**/*.php",
        "./app/Livewire/**/*.php",
        "./app/Models/**/*.php",
        "./app/Funs/**/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        minWidth: {
            300: "300px",
        },
        maxWidth: {
            300: "300px",
            400: "400px",
            600: "600px",
            900: "900px",
        },
        extend: {
            colors: {
                "bgd": "#424242",
                "bgl": "#eeeeee",
                "bgh": "#9e9e9e",
                "txl": "#424242",
                "txd": "#eeeeee",
                "txh": "#9e9e9e",
                "1st": "#8cc63f",
                "2nd": "#62ad43",
                "3rd": "#319a43",
            },
        },
    },
    plugins: [],
}

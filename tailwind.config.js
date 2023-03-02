/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
  ],
  theme: {
    // container: {
    //   center: true,
    //   padding: "16px",
    // },
    extend: {
      colors: {
        primary: "#1d4ed8",
      },
    },
  },
  plugins: [require("daisyui")],
};

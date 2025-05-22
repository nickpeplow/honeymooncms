module.exports = {
  content: [
    "./*.php",
    "./template-parts/**/*.php",
    "./inc/**/*.php",
    "./assets/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#F4D4B6", // dark brown
        secondary: "#353439", // light black
        tertiary: "#009AFF", // blue color
        info: "#FFEEDE", // light brown
        danger: "#E3B5A6", // brown border color
        green: "#1FC900",
        brown: "#FFEEDE",
        lightPuple: "#615D81",
        Purple: "#827da8",
        lightBlack: "#0000004d",
      },
      fontSize: {
        h1: "38px",
        h1sm: "34px",
        h2: "32px",
        h2sm: "28px",
        h3: "25px",
        h3sm: "24px",
        h4: "18px",
        a: "15px",
      },
      lineHeight: {
        h1: "1.15",
        h1sm: "34px",
        h2: "1.25em",
        h3: "1.3em",
        h4: "1.15",
        h4sm: "1.3em",
        p: "32px",
        a: "29px",
      },
      fontFamily: {
        sans: ['Lato', 'sans-serif'],
      },
    },
  },
  plugins: [],
};

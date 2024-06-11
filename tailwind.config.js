module.exports = {
  mode: "jit",
  content: ["*.{html,php,js}"],
  theme: {
    screens: {
      phone: { max: "575px" },
      tablet: { min: "767px", max: "1024px" },
      laptop: { min: "1025px", max: "1279px" },
      fullscreen: { min: "1279px" },
    },
  },
  plugins: [],
};

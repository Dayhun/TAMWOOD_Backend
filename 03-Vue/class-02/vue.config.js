module.exports = {
  devServer: {
    proxy: {
      "/api": {
        target: "http://testapi.jasonwatmore.com",
        changeOrigin: true,
      },
    },
  },
};
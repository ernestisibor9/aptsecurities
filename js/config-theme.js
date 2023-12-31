"use strict";
var HomepageApp = {
  theme_slideshow: function theme_slideshow() {
    var path = location.pathname;
    new CarouselConfig({
      element: "#slideshow",
      fadeTransition: false,
      interval: 6000,
      control: { type: "button", onHover: true },
      height: { desktop: "723px", tablet: "493px", phone: "512px" },
    }).init();
    if (path.includes("homepage2") || path.includes("homepage4")) {
      new CarouselConfig({
        element: "#slideshow",
        fadeTransition: false,
        interval: 6000,
        control: { type: "button", onHover: true },
        height: { desktop: "604px", tablet: "463px", phone: "476px" },
      }).init();
    }
  },
  theme_testimoni2: function theme_testimoni2() {
    new CarouselConfig({
      element: "#testimoni2",
      fadeTransition: false,
      interval: 9000,
      control: { type: "indicator", onHover: false },
      height: { desktop: "238px", tablet: "260px", phone: "320px" },
    }).init();
  },
  theme_testimoni: function theme_testimoni() {
    new CarouselConfig({
      element: "#testimoni",
      fadeTransition: false,
      interval: 9000,
      control: { type: "indicator", onHover: false },
      height: { desktop: "238px", tablet: "260px", phone: "320px" },
    }).init();
  },
  theme_tradingview: function theme_tradingview() {
    var path = location.pathname;
    if (path.includes("index") || !path.includes(".html")) {
      new TradingviewWidget({
        element: "#tradingview-widget",
        height: 150,
        type: "mini-chart",
        theme: "light",
        symbol: "MRK",
      }).init();
    }
    if (path.includes("homepage2")) {
      new TradingviewWidget({
        element: "#tradingview-widget",
        height: 361,
        type: "market-overview",
        theme: "light",
        symbol: [
          { s: "FX:EURUSD" },
          { s: "FX:GBPUSD" },
          { s: "FX:USDJPY" },
          { s: "FX:USDCHF" },
          { s: "FX:AUDUSD" },
          { s: "FX:USDCAD" },
        ],
      }).init();
    }
  },
  theme_mobilenav: function theme_mobilenav() {
    new MobileNavbar({
      addonButtons: true,
      buttons: [
        { name: "Login", url: "", type: "primary", icon: "sign-in-alt" },
      ],
    }).init();
  },
  theme_init: function theme_init() {
    HomepageApp.theme_slideshow();
    HomepageApp.theme_testimoni2();
    HomepageApp.theme_testimoni();
    HomepageApp.theme_tradingview();
    HomepageApp.theme_mobilenav();
  },
};
document.addEventListener("DOMContentLoaded", function () {
  HomepageApp.theme_init();
});

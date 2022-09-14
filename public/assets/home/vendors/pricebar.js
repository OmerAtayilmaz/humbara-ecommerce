const priceBar = document.querySelector("#price-bar");

window.addEventListener("scroll", function (e) {
  if (window.scrollY >= 200) {
    priceBar.classList.add("opacity-100");
  } else {
    priceBar.classList.remove("opacity-100");
  }
});

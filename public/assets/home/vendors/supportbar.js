const upButton = document.querySelector("#up-button");

window.addEventListener("scroll", function (e) {
  if (window.scrollY >= 150) {
    upButton.classList.add("opacity-100");
  } else {
    upButton.classList.remove("opacity-100");
  }
});



const collapseBtn = document.querySelector(".support__item--collapse");
const collapseArea = document.querySelector(".support__collapse");

collapseBtn.addEventListener("click", () => {
  collapseArea.classList.toggle("deactive");
})
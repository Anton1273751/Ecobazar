document.addEventListener("DOMContentLoaded", function () {
  const priceNodeHidden = document.querySelector(".price__wrapp");
  const priceNodeTitle = document.querySelector(".price__title");

  priceNodeTitle.addEventListener("click", (e) => {
    if (priceNodeHidden.classList.contains("hidden")) {
      priceNodeHidden.classList.remove("hidden");
    } else {
      priceNodeHidden.classList.add("hidden");
    }
  });
});

// const priceNodeTitle = document.querySelector(".price__title");
// const rangeNodeinput = document.querySelector(".price__range");
// rangeNodeinput.getComputedStyle
// const textNode = document.querySelector(".price__text");

// priceNodeTitle.addEventListener("click", (e) => {
//     if (condition) {

//     }
// })

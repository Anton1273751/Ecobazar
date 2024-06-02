document.addEventListener("DOMContentLoaded", function () {
  const ratingNodeHidden = document.querySelector(".rating__container");
  const ratingNodeTitle = document.querySelector(".rating__title");

  ratingNodeTitle.addEventListener("click", (e) => {
    if (ratingNodeHidden.classList.contains("hidden")) {
      ratingNodeHidden.classList.remove("hidden");
    } else {
      ratingNodeHidden.classList.add("hidden");
    }
  });
});

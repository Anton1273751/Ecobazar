document.addEventListener("DOMContentLoaded", function () {
  const popularNodeHidden = document.querySelector(".popular__wrapp");
  const popularTitle = document.querySelector(".popular__title");

  popularTitle.addEventListener("click", (e) => {
    if (popularNodeHidden.classList.contains("hidden")) {
      popularNodeHidden.classList.remove("hidden");
    } else {
      popularNodeHidden.classList.add("hidden");
    }
  });
});

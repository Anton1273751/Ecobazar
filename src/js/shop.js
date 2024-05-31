document.addEventListener("DOMContentLoaded", function () {
  const categoriesNodeHidden = document.querySelector(
    ".categories__input-wrapp"
  );
  const categoriesNodeTitle = document.querySelector(".categories__title");
  console.log(categoriesNodeTitle);

  categoriesNodeTitle.addEventListener("click", (e) => {
    if (categoriesNodeHidden.classList.contains("hidden")) {
      categoriesNodeHidden.classList.remove("hidden");
    } else {
      categoriesNodeHidden.classList.add("hidden");
    }
  });
});

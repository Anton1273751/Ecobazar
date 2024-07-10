const addCountNode = document.querySelectorAll(".shopping-cart__plus");
const decreaseCountNode = document.querySelectorAll(".shopping-cart__minus");




decreaseCountNode.forEach((button) => {
  button.addEventListener("click", (e) => {
    if (button) {
      const idElemtMinus = e.target.closest(".shopping-cart__article").id;
      console.log(idElemtMinus);
      const countNode = e.target.parentElement.querySelector(
        ".shopping-cart__count"
      ).textContent;
      let currentCount = parseInt(countNode);
      if (currentCount <= 1) {
        e.stopPropagation();
      } else {
        currentCount--;
      }
      console.log(currentCount);

      console.log("-");
    } else {
      console.log("Проблема");
    }
  });
});

addCountNode.forEach((button) => {
  button.addEventListener("click", (e) => {
    if (button) {
      const idElemtPlus = e.target.closest(".shopping-cart__article").id;
      console.log(idElemtPlus);
      const countNode = e.target.parentElement.querySelector(
        ".shopping-cart__count"
      ).textContent;
      let currentCount = parseInt(countNode);
      currentCount++;
      console.log(currentCount);
      console.log("+");
    } else {
      console.log("Проблема");
    }
  });
});

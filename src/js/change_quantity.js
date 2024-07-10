const addCountNode = document.querySelectorAll(".shopping-cart__plus");
const decreaseCountNode = document.querySelectorAll(".shopping-cart__minus");
const articleNode = document.querySelectorAll(".shopping-cart__article");

// articleNode.forEach((elem) => {
//   elem.addEventListener("click", (e) => {
//     const countElement = e.target.parentElement.querySelector(
//       ".shopping-cart__count"
//     ).textContent;
//     let currentCount = parseInt(countElement);
//     currentCount++;
//     console.log(currentCount);
//   });
// });

decreaseCountNode.forEach((button) => {
  button.addEventListener("click", (e) => {
    if (button) {
      const countNode = e.target.parentElement.querySelector(
        ".shopping-cart__count"
      ).textContent;
      let currentCount = parseInt(countNode);
      if (currentCount <= 0) {
        e.stopPropagation();
      } else {
        currentCount--;
      }
      console.log("-");
    } else {
      console.log("Проблема");
    }
  });
});

addCountNode.forEach((button) => {
  button.addEventListener("click", (e) => {
    if (button) {
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

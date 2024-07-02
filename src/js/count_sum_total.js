const addCountNode = document.querySelectorAll(".shopping-cart__plus");
const countProductNode = document.querySelectorAll(".shopping-cart__count");
const articleProduct = document.querySelectorAll(".shopping-cart__article");
const closeProduct = document.querySelectorAll(".shopping-cart__close");
const getId = document.getElementById("id");
console.log(getId);
// console.log(closeProduct);
// console.log(articleProduct);

closeProduct.forEach((elem) => {
  elem.addEventListener("click", (e) => {
    articleProduct.forEach((elem) => {
      elem.remove();
    });
  });
});

// console.log(countProductNode);
// let totalCount = 2;

// countProductNode.forEach((elem) => {
//   elem.textContent === totalCount;
// });

// addCountNode.forEach((elem) => {
//     elem.addEventListener("click", (e) => {

//   });
// });

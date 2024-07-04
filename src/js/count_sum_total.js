const addCountNode = document.querySelectorAll(".shopping-cart__plus");
const countProductNode = document.querySelectorAll(".shopping-cart__count");
const articleProduct = document.querySelectorAll(".shopping-cart__article");
const closeProduct = document.querySelectorAll(".shopping-cart__close");
const getId = document.getElementById("1");
console.log(getId);

getId.addEventListener("click", () => {
  const id = this.id;
  console.log(id);
});
// closeProduct.forEach((elem) => {
//   elem.addEventListener("click", () => {
//     const id = this.id;
//     console.log(id);
//   });
// });

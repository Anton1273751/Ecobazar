document.querySelectorAll(".shopping-cart__close").forEach((button) => {
  button.addEventListener("click", function () {
    const productId = this.getAttribute("product_id");
    const article = this.closest(".shopping-cart__article");

    fetch("./src/php/delete_product.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ product_id: productId }),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          article.remove();
        } else {
          console.error("Failed to delete product");
        }
      })
      .catch((error) => console.error("Error:", error));
  });
});

///////////////////////////////////////////

// const closeProduct = document.querySelectorAll(".shopping-cart__close");

// closeProduct.forEach((button) => {
//   button.addEventListener("click", () => {
//     const productId = this.getAttribute("product_id");
//     const article = this.closest(".shopping-cart__article"); //?

//     fetch("./src/php/delete_product.php", {
//       method: "POST",
//       headers: {
//         "Content-Type": "application/json",
//       },
//       body: JSON.stringify({ product_id: productId }),
//     })
//       .then((responce) => responce.json())
//       .then((data) => {
//         if (data.success) {
//           article.remove();
//         } else {
//           console.error("Ошибка добавления товара");
//         }
//       })
//       .catch((error) => console.error("Error", error));
//   });
// });

/////////////////////////////////////////////////////////

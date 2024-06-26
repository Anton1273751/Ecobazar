const basketNode = document.querySelectorAll(".article__basket");

basketNode.forEach((elem) => {
  elem.addEventListener("click", (e) => {
    const product_id = elem.getAttribute("data-id");

    fetch("./src/php/add_to_cart.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded", //читать
      },
      body: ` id=${product_id} `,
    })
      .then((responce) => responce.text())
      .then((data) => {
        console.log(data);
      })
      .catch((error) => console.error("Error", error));
  });
});

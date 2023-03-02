const stok = document.querySelector("#stok");
const produk = document.querySelector("#produk");

stok.addEventListener("click", function () {
  stok.classList.toggle("active");
});

produk.addEventListener("click", function () {
  produk.classList.toggle("active");
});

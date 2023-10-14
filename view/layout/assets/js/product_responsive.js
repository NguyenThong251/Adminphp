// reload lại trình duyệt khi thay đổi kích thước màn hình
window.addEventListener("resize", () => {
  window.location.reload();
});

// thay đổi kích thước sản phẩm
const productList = document.querySelectorAll(".product__img");
productList.forEach((prod) => {
  const width = prod.offsetWidth;
  console.log(width);
  prod.style.height = width + "px";
});

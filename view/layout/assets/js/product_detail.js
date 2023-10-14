var btnMore = document.querySelector(".product__detail--more");
var textDesc = document.querySelector(".product__desc--paragraph");
var shortDesc = document.querySelector(".product__detail--shorten");

btnMore.addEventListener("click", function () {
  textDesc.style.height = "auto";
  btnMore.style.display = "none";
});

shortDesc.addEventListener("click", function () {
  textDesc.style.height = "200px";
  btnMore.style.display = "flex";
});

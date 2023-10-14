// Lấy phần tử input
const quantityInput = document.querySelector(".cart__quantity input");

// Lấy phần tử nút tăng và giảm
const increaseBtn = document.querySelector(".cart__quantity--add");
const decreaseBtn = document.querySelector(".cart__quantity--remove");

// Hàm xử lý khi click nút tăng
increaseBtn.addEventListener("click", function () {
  let currentValue = parseInt(quantityInput.value);
  currentValue++;

  quantityInput.value = currentValue;
});

// Hàm xử lý khi click nút giảm
decreaseBtn.addEventListener("click", function () {
  let currentValue = parseInt(quantityInput.value);

  // Giảm nhưng không được âm
  if (currentValue > 1) {
    currentValue--;
    quantityInput.value = currentValue;
  }
});

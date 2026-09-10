let menuBtn = document.getElementById("menuBtn");
let navigation = document.getElementById("navigation");
let mobileMenu = document.getElementById("mobile-menu-overlay");
let mobileDrawer = document.getElementById("mobile-menu-drawer");
let closeBtn = mobileDrawer.querySelector("button");
const sizeBtns = document.querySelectorAll(".size-option");
const plusBtn = document.getElementById("plusBtn");
const minusBtn = document.getElementById("minusBtn");
let countInp = document.getElementById("count");
let count = 1;
let product = document.querySelector(".product");
let favBtn = document.getElementById("favBtn");
let price = Number(product.dataset.price);
let faheart = favBtn.querySelector(".fa-heart");

menuBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("hidden");
    mobileDrawer.classList.remove("-translate-x-full");
});
closeBtn.addEventListener("click", () => {
    mobileMenu.classList.add("hidden");
    mobileDrawer.classList.add("-translate-x-full");
});

mobileMenu.addEventListener("click", () => {
    mobileMenu.classList.add("hidden");
    mobileDrawer.classList.add("-translate-x-full");
});

sizeBtns.forEach((sizeBtn) => {
    sizeBtn.addEventListener("click", () => {
        sizeBtns.forEach((btn) => {
            btn.classList.remove("btnActive");
        });

        sizeBtn.classList.add("btnActive");
    });
});

plusBtn.addEventListener("click", () => {
    countInp.value = count++;
    const totalPrice = count * price;
    product.innerHTML = "$" + totalPrice;
});

minusBtn.addEventListener("click", () => {
    if (countInp.value > 1) {
        count--;
        countInp.value = count;
        const totalPrice = count * price;
        product.innerHTML = "$" + totalPrice;
    }
});

favBtn.addEventListener("click", () => {
    faheart.classList.toggle("fa-regular");
    faheart.classList.toggle("fa-solid");
});

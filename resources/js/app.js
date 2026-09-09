let menuBtn = document.getElementById("menuBtn");
let navigation = document.getElementById("navigation");
let mobileMenu = document.getElementById("mobile-menu-overlay");
let mobileDrawer = document.getElementById("mobile-menu-drawer");
let closeBtn = mobileDrawer.querySelector("button");

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

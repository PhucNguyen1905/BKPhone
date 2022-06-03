const sideMenu = document.querySelector("nav");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");

// Show sidebar
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

// Hide sidebar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})
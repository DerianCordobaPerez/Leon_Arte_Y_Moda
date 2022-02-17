window.addEventListener("scroll", function() {
    const nav = document.querySelector("nav");
    nav.classList.toggle("navbar-scroll", window.scrollY > 0);
});

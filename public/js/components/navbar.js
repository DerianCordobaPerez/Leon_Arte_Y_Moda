  // funcion de escroll a la barra de navegacion

  alert("hola mundo");
  window.addEventListener("scroll", function() {
      var nav = document.querySelector("nav");
      nav.classList.toggle("navbar-scroll", window.scrollY > 0);
  });

  alert("hola mundo");
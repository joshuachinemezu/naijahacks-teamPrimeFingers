window.addEventListener("load", () => {
  const loader = document.getElementById("preloader");
  setTimeout(() => {
    loader.style.display = "none";
    loader.classList.add("fadeOut");
  }, 100);
});

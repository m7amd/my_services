// Scroll To Top 
let scrollBtn = document.querySelector(".scroll-to-top");

window.onscroll = function () {

  if (this.scrollY > 900) {
    scrollBtn.style.display = "block";
  } else {
    scrollBtn.style.display = "none";
  }

};

scrollBtn.addEventListener('click', function() {

  window.scrollTo({
    top: 0,
    behavior: "smooth",
  })

});
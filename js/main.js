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


// Toggle Themes

let getMode = localStorage.getItem('mode');
if (getMode && getMode === 'dark') {
  document.body.classList.toggle("theme");
}

function toggleTheme () {
  document.body.classList.toggle("theme");

  if (!document.body.classList.contains("theme")) {
    return localStorage.setItem("mode", "light");
  } 
  localStorage.setItem("mode", "dark");

};

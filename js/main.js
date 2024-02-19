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


// Nice Scroll 

// $('body').niceScroll({
//   touchbhavior: true,
//   zindex: '999999',
//   scrollspeed: '30',
//   cursorcolor:"#7c4ab6",
//   background:"#242526",
//   cursorborder:"1px solid #7c4ab6",
//   cursorborderradius: '3px',
//   cursorwidth:"7px",
// });


// Toggle Themes

function toggleTheme () {
  document.body.classList.toggle("theme");
};


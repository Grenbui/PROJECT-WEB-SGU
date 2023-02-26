
const header = document.querySelector('#header');
const scrollPosition = 100;

window.addEventListener('scroll', function() {
  if (window.pageYOffset > scrollPosition) {
    header.classList.add('fixed');
  } else {
    header.classList.remove('fixed');
  }
});



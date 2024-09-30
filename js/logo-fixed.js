window.addEventListener('scroll', function() {
    var logo = document.querySelector('.logo');
    var scrollPosition = window.scrollY;

    
    if (scrollPosition > 50) {
      logo.classList.add('fixed');
    } else {
      logo.classList.remove('fixed');
    }
  });


  
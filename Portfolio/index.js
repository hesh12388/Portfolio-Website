

const observer = new IntersectionObserver((entries) =>{
  entries.forEach((entry) => {
      if(entry.isIntersecting){
          entry.target.classList.add('show');
      }

      else{
          entry.target.classList.remove('show');
      }

  });
});


const hiddenElements = document.querySelectorAll('.hidden');

hiddenElements.forEach((el) => observer.observe(el));


const footer = document.querySelector('.bg-contact');
function isInViewport(element) {
  const rect = element.getBoundingClientRect();

  return (
      rect.top>= 0 &&
      rect.left>= 0 &&
      rect.bottom-300 <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}



window.addEventListener('scroll', () =>{

  if(isInViewport(footer))
  {

    footer.style.margin="50px";
  }

  else{
    footer.style.margin="0px";
  }
});


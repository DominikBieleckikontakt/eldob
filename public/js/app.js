const elements = document.querySelectorAll('.offer__card');

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('slideIn-visible');
      observer.unobserve(entry.target);
    }
  });
});

elements.forEach(element => {
  observer.observe(element);
});
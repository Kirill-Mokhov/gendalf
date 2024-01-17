const accordionButtons = document.querySelectorAll('.accordion-button');

accordionButtons.forEach(button => {
  button.addEventListener('click', () => {
    const item = button.parentNode;
    const content = item.querySelector('.accordion-content');
    const svg = button.querySelector('svg');

    if (item.classList.contains('active')) {
      item.classList.remove('active');
      item.classList.add('inactive');
      svg.classList.remove('active');
      svg.classList.add('inactive');
      content.style.maxHeight = null;
    } else {
      item.classList.add('active');
      item.classList.remove('inactive');
      svg.classList.add('active');
      svg.classList.remove('inactive');
      content.style.maxHeight = content.scrollHeight + 'px';
    }
  });
});
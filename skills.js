const progressBars = document.querySelectorAll('.progress');

progressBars.forEach(bar => {
  const width = bar.style.width;
  bar.style.width = '0';
  setTimeout(() => {
    bar.style.width = width;
  }, 200);
});

const skillItems = document.querySelectorAll('#skills-list li');
skillItems.forEach(item => {
  item.addEventListener('mouseover', () => {
    const skillName = item.querySelector('.skill-name');
    skillName.classList.add('highlight');
  });

  item.addEventListener('mouseout', () => {
    const skillName = item.querySelector('.skill-name');
    skillName.classList.remove('highlight');
  });
});

document.body.classList.remove('fade');

const activePg = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').forEach(link => {
  if (link.href.includes(`${activePg}`)) { link.classList.add('active') }
  else {
    link.addEventListener('mouseover', function changeColor() { link.style.color = 'white' })
    link.addEventListener('mouseout', function changeColor() { link.style.color = '#9C9C9C' })
  }
})


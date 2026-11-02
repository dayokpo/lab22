document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('.wp-site-blocks > header');

  if (!header) {
    return;
  }

  const stickyPoint = header.getBoundingClientRect().bottom + window.scrollY;

  function updateStickyHeader() {
    if (window.scrollY > stickyPoint) {
      header.classList.add('is-sticky');
    } else if (window.scrollY === 0) {
      header.classList.remove('is-sticky');
    }
  }

  window.addEventListener('scroll', updateStickyHeader, { passive: true });
  updateStickyHeader();
});
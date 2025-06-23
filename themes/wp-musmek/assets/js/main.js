"use strict";

function mobileMenu() {
  const btns = document.querySelectorAll('.js-menu-btn');

  if (btns.length === 0) return;

  let closeDelay;

  btns.forEach(btn => {
    btn.addEventListener("click", () => {
      if (!document.body.classList.contains('use-transitions')) {
        document.body.classList.add('use-transitions');
      }

      if (closeDelay) clearTimeout(closeDelay);

      if (!document.body.classList.contains('transition-mobile-menu')) {
        document.body.classList.add('active-mobile-menu');
        
        window.requestAnimationFrame(() => {
          document.body.classList.add('transition-mobile-menu');
        });
      } else {
        document.body.classList.remove('transition-mobile-menu');

        closeDelay = setTimeout(() => {
          document.body.classList.remove('active-mobile-menu');
        }, 501)
      }
    });
  });
}
mobileMenu();

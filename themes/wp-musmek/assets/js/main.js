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

function swipeGalleryOnScroll() {
  // Only run if a gallery section is rendered
  const gallery = document.body.querySelector('.section-gallery');
  if (!gallery) return;

  // Animation loop
  let ticking = false;
  let breakTicking = false;
  let cache = 0;
  let rect = gallery.getBoundingClientRect();
  
  
  // Reference: https://www.trysmudford.com/blog/linear-interpolation-functions/
  const clamp = (v, min = 0, max = 1) => Math.min(max, Math.max(min, v));
  const invLerp = (current, target, progress) => clamp((progress - current) / (target - current));

  function tick() {
    console.log("⏰ TICK");
    let y = window.pageYOffset || window.scrollY;
    const howFar = invLerp(rect.top - window.innerHeight, rect.bottom, y);

    if (howFar !== cache) {
      cache = howFar;
    }
  }

  window.addEventListener("scroll", () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        tick();
        ticking = false;
      });

      ticking = true;
    }
  });
}
swipeGalleryOnScroll();

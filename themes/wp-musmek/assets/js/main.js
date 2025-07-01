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
  const gallery = document.body.querySelector('.section-gallery') || false;
  
  if (!gallery) return;

  const imageContainers = gallery.querySelectorAll(".section-gallery__image-container");
  const galleryWidth = gallery.getBoundingClientRect().width;
  const imagesWidth = imageContainers[0].getBoundingClientRect().left + imageContainers[imageContainers.length - 1].getBoundingClientRect().right;
  
  if (galleryWidth >= imagesWidth) return;
  
  // Animation loop
  const images = gallery.querySelector(".section-gallery__images");
  const heightDivider = 1.5; // If 2, the swiping starts when the top is at the middle of the viewport

  let ticking = false;
  let looping = false;
  let cache = 0;
  
  // Reference: https://www.trysmudford.com/blog/linear-interpolation-functions/
  const clamp = (v, min = 0, max = 100) => Math.min(max, Math.max(min, v));
  const lerp = (from, to, ease) => from * (1 - ease) + to * ease;
  
  const maxTransform = imagesWidth - galleryWidth;

  function loop() {
    const rect = gallery.getBoundingClientRect();
    const current = 100 - ((rect.bottom - (window.innerHeight / heightDivider)) / rect.height * 100);
    const progress = clamp(lerp(cache, current, 0.1));
    
    if (cache !== progress) {
      const transformString = "translateX(-" + (maxTransform / 100 * progress) + "px)";
      
      images.style.mozTransform = transformString;
      images.style.webkitTransform = transformString;
      images.style.transform = transformString;
      
      cache = progress;
      window.requestAnimationFrame(loop);
    } else {
      looping = false;
    }
  }

  window.addEventListener("scroll", () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        if (!looping) {
          looping = true;
          loop();
        }

        ticking = false;
      });

      ticking = true;
    }
  });
}
swipeGalleryOnScroll();

window.addEventListener("resize", () => {
  swipeGalleryOnScroll();
});

function handleReadMoreBtns() {
  const btns = document.querySelectorAll(".js-toggle-read-more");
  if (btns.length === 0) return;

  btns.forEach((btn) => {
    const parent = btn.closest('.js-truncated');

    if (!parent) return;

    btn.addEventListener('click', () => parent.classList.toggle("active"));
  });
}
handleReadMoreBtns();
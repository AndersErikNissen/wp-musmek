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

  const images = gallery.querySelectorAll(".section-gallery__image-container");
  const galleryWidth = gallery.getBoundingClientRect().width;
  const imagesWidth = images[0].getBoundingClientRect().left + images[images.length - 1].getBoundingClientRect().right;
  
  if (galleryWidth >= imagesWidth) return;

  const imageWrapper = gallery.querySelector(".section-gallery__wrapper");

  // Animation loop
  let ticking = false;
  let looping = false;
  let cache = 0;
  
  // Reference: https://www.trysmudford.com/blog/linear-interpolation-functions/
  const clamp = (v, min = 0, max = 100) => Math.min(max, Math.max(min, v));
  const lerp = (from, to, ease) => from * (1 - ease) + to * ease;
  
  const maxTransform = imagesWidth - galleryWidth;

  function loop() {
    const rect = gallery.getBoundingClientRect();
    const current = 100 - ((rect.bottom - window.innerHeight) / rect.height * 100);
    const progress = clamp(lerp(cache, current, 0.5));
    
    if (cache !== progress) {
      cache = progress;
      const transformX = maxTransform / 100 * progress;
      imageWrapper.style.transform = "translateX(-" + transformX + "px)";
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

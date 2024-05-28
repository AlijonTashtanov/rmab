var swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  
  autoplay: {
    delay: 5000,
  },
  loop: true,
});

// banner slider
var swiper = new Swiper(".BannerSwiper", {
  navigation: {
    nextEl: ".slider-banner-next",
    prevEl: ".slider-banner-prev",
  },
  autoplay: {
    delay: 5000,
  },
  loop: true,
});

// news slider
var swiper = new Swiper(".newsSwiper", {
  slidesPerView: 4,
  spaceBetween: 30,
  navigation: {
    nextEl: ".news-lider-next",
    prevEl: ".news-lider-prev",
  },
  autoplay: {
    delay: 5000,
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 40
    },
    // when window width is >= 800px
    800: {
      slidesPerView: 3,
      spaceBetween: 40
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
      spaceBetween: 50
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 4,
      spaceBetween: 50
    }
  },
  loop: true,
});

// partners slider
var swiper = new Swiper(".partnersSwiper", {
  slidesPerView: 6,
  spaceBetween: 50,
  navigation: {
    nextEl: ".news-lider-next",
    prevEl: ".news-lider-prev",
  },
  autoplay: {
    delay: 5000,
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 40
    },
    // when window width is >= 800px
    800: {
      slidesPerView: 4,
      spaceBetween: 40
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 5,
      spaceBetween: 50
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 6,
      spaceBetween: 50
    }
  },
  loop: true,
});

//contact maska
const phoneInput = document.getElementById("phone-input");
const phoneMask = IMask(phoneInput, {
  mask: "+{998}(90) 000-00-00",
});



// faqs
setTimeout(() => {
  document.querySelectorAll(".accordion-header").forEach((button) => {
    button.addEventListener("click", () => {
      const accordionContent = button.nextElementSibling;

      button.classList.toggle("active");

      if (button.classList.contains("active")) {
        accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
      } else {
        accordionContent.style.maxHeight = 0;
      }

      // Close other open accordion items
      document.querySelectorAll(".accordion-header").forEach((otherButton) => {
        if (otherButton !== button) {
          otherButton.classList.remove("active");
          otherButton.nextElementSibling.style.maxHeight = 0;
        }
      });
    });
  });
}, 2000);

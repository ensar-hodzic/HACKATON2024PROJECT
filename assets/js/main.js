/**
* Template Name: Append
* Updated: Feb 01 2024 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Scroll up sticky header to headers with .scroll-up-sticky class
   */
  let lastScrollTop = 0;
  window.addEventListener('scroll', function() {
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky')) return;

    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop && scrollTop > selectHeader.offsetHeight) {
      selectHeader.style.setProperty('position', 'sticky', 'important');
      selectHeader.style.top = `-${header.offsetHeight + 50}px`;
    } else if (scrollTop > selectHeader.offsetHeight) {
      selectHeader.style.setProperty('position', 'sticky', 'important');
      selectHeader.style.top = "0";
    } else {
      selectHeader.style.removeProperty('top');
      selectHeader.style.removeProperty('position');
    }
    lastScrollTop = scrollTop;
  });

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .has-dropdown i').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      if (document.querySelector('.mobile-nav-active')) {
        e.preventDefault();
        this.parentNode.classList.toggle('active');
        this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
        e.stopImmediatePropagation();
      }
    });
  });

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Init isotope layout and filters
   */
  function initIsotopeLayout() {
    document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
      let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
      let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
      let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

      let initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });

      isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
        filters.addEventListener('click', function() {
          isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          initIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          if (typeof aosInit === 'function') {
            aosInit();
          }
        }, false);
      });

    });
  }
  window.addEventListener('load', initIsotopeLayout);

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll('.swiper').forEach(function(swiper) {
      let config = JSON.parse(swiper.querySelector('.swiper-config').innerHTML.trim());
      new Swiper(swiper, config);
    });
  }
  window.addEventListener('load', initSwiper);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  const analyseBtn = document.querySelector('#batane');
var serviceBox = document.querySelector('.result-box');


analyseBtn.addEventListener('click', () => {
    setTimeout(function() {
      serviceBox.classList.remove('invisible');
      serviceBox.style.transition = "all 500ms ease-in";
    }, 3000);
});

let radioDugmad1 = document.getElementById('option-1');
radioDugmad1.addEventListener('click', () => {
   let span5 = document.querySelector("#span-5");
   span5.textContent = "Moj omiljeni lik iz crtanog filma ili knjige";
   let span6 = document.querySelector("#span-6");
   span6.textContent = "Moje omiljeno godišnje doba";
   let span7 = document.querySelector("#span-7");
   span7.textContent = "Moj ljubimac kao junak: Pustolovine mog malog prijatelja";
});

let radioDugmad2 = document.getElementById('option-2');
radioDugmad2.addEventListener('click', () => {
   let span5 = document.querySelector("#span-5");
   span5.textContent = "Moja omiljena destinacija za putovanje";
   let span6 = document.querySelector("#span-6");
   span6.textContent = "Kako sam naučio/naučila nešto novo";
   let span7 = document.querySelector("#span-7");
   span7.textContent = "Moj omiljeni izum: Kako bih promijenio/la svijet uz pomoć nauke i tehnologije";
});

let radioDugmad3 = document.getElementById('option-3');
radioDugmad3.addEventListener('click', () => {
   let span5 = document.querySelector("#span-5");
   span5.textContent = "Utjecaj društvenih mreža na mlade";
   let span6 = document.querySelector("#span-6");
   span6.textContent = "Moj doprinos zajednici: Ideje i akcije za pozitivne promjene u lokalnoj zajednici";
   let span7 = document.querySelector("#span-7");
   span7.textContent = "Digitalno nasilje i cyberbullying";
});

let radioDugmad4 = document.getElementById('option-4');
radioDugmad4.addEventListener('click', () => {
   let span5 = document.querySelector("#span-5");
   span5.textContent = "Moralna dilema modernih tehnoloških napredaka";
   let span6 = document.querySelector("#span-6");
   span6.textContent = "Utjecaj umjetne inteligencije na budućnost obrazovanja";
   let span7 = document.querySelector("#span-7");
   span7.textContent = "Fenomen selfija: samopredstavljanje u digitalno doba";
});


let themeInput = document.querySelector("#theme-input");
let option5 = document.querySelector("#option-5");
let option6 = document.querySelector("#option-6");
let option7 = document.querySelector("#option-7");
themeInput.addEventListener("click", () => {
  option5.checked = false;
  option6.checked = false;
  option7.checked = false;
  // console.log(themeInput.value);
});

});

// djeciji doplatak emir

document.addEventListener("DOMContentLoaded", function() {
  // Function to update the hidden input field value
  function updateTitle() {
    var selectedOption = document.querySelector('input[name="ay"]:checked');
    var customTitle = document.getElementById('theme-input').value;
    var titleInput = document.getElementById('title-input');
    
    if (selectedOption) {
      titleInput.value = selectedOption.id;
    } else if (customTitle.trim() !== '') {
      titleInput.value = customTitle;
    } else {
      titleInput.value = '';
    }
  }

  // Listen for changes in radio inputs
  var radioInputs = document.querySelectorAll('input[name="ay"]');
  radioInputs.forEach(function(input) {
    input.addEventListener('change', updateTitle);
  });

  // Listen for changes in the input field
  var themeInput = document.getElementById('theme-input');
  themeInput.addEventListener('input', updateTitle);
});
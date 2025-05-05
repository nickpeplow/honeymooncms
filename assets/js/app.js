// ============== Header Menu
const menuBtn = document.getElementById('menu-toggler');
const menu = document.getElementById('nav-menu');
const backdrop = document.getElementById('backdrop');
const menuLinks = document.querySelectorAll('.menu-link');

menuBtn.addEventListener('click', () => {
  menu.classList.toggle('show');
  backdrop.classList.toggle('show');
});
backdrop.addEventListener('click', hideMenu);
menuLinks.forEach((link) => {
  link.addEventListener('click', hideMenu);
});

function hideMenu() {
  menu.classList.remove('show');
  backdrop.classList.remove('show');
}

// ============ View All Services Cards
const viewAllBtn = document.getElementById('view-all-btn');
const servicesWrapper = document.getElementById('services-cards');

viewAllBtn.addEventListener('click', () => {
  servicesWrapper.classList.toggle('show');
  if (servicesWrapper.classList.contains('show')) {
    viewAllBtn.textContent = 'View Less';
    viewAllBtn.classList.add('mt-5');
  } else {
    viewAllBtn.textContent = 'View All';
    viewAllBtn.classList.remove('mt-5');
  }
});

// ============== Post Code Chekcer
const postCode = document.getElementById('postcode-input');
const postCodeBtn = document.getElementById('postcode-btn');
const loader = document.getElementById('loading-spinner');
const errMessage = document.getElementById('error-message');
const postCodeResult = document.getElementById('postcode-result');

postCodeBtn.addEventListener('click', () => {
  if (postCode.value.trim().length > 5 && postCode.value.trim().length < 8) {
    postCode.value = '';
    errMessage.classList.add('hidden');
    loader.classList.remove('hidden');

    setTimeout(() => {
      loader.classList.add('hidden');
      postCodeResult.classList.remove('hidden');
    }, 1500);
  } else {
    errMessage.classList.remove('hidden');
  }
});

postCode.addEventListener('input', () => {
  errMessage.classList.add('hidden');
  postCodeResult.classList.add('hidden');
});

// async function checkZipCode() {
//   const area = await fetchPostcodeData('EC2N4AH');
// }

// async function fetchPostcodeData(postcode) {
//   try {
//     const response = await fetch(`https://api.postcodes.io/postcodes/${postcode}`);
//     const data = await response.json();
//     if (data.status === 200) {
//       console.log(data);
//       return data.result.admin_district;
//     } else {
//       return null;
//     }
//   } catch (error) {
//     console.error('Error fetching postcode data:', error);
//     return null;
//   }
// }

// ===============  Statistics Counter
const statistics = document.getElementById('statistics');
const counters = document.querySelectorAll('.statistic__item-counter');
let activateCounter = false;
let timer = 2500;

function startCounter(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting && !activateCounter) {
      activateCounter = true; // Start only once
      updateCounter(); // Start counting when in view
      observer.unobserve(statistics); // Stop observing once it has started
    }
  });
}

// Create an intersection observer
const observer = new IntersectionObserver(startCounter, {
  threshold: 0.75, // Start when 50% of the element is in view
});

// Observe the counter element
observer.observe(statistics);

function updateCounter() {
  counters.forEach((counter) => {
    let startValue = 0;
    let endValue = parseInt(counter.getAttribute('data-count'));
    let duration = Math.floor(timer / endValue);

    let countTimer = setInterval(() => {
      startValue += 1;
      counter.textContent = `${startValue}+`;

      if (startValue === endValue) {
        clearTimeout(countTimer);
      }
    }, duration);
  });
}

// =================== FAQ
// const faqItems = document.querySelectorAll('.faq__item-header');
const accordionItems = document.querySelectorAll('.faq__item');

accordionItems.forEach((item) => {
  const header = item.querySelector('.faq__item-header');
  header.addEventListener('click', () => {
    toggleAccordion(item);
  });
});

function toggleAccordion(accordionItem) {
  const content = accordionItem.querySelector('.faq__item-content');
  const isActive = accordionItem.classList.contains('active');

  // Close other accordion items
  const allAccordionItems = document.querySelectorAll('.faq__item');
  allAccordionItems.forEach((item) => {
    if (item !== accordionItem) {
      item.classList.remove('active');
      item.querySelector('.faq__item-content').style.maxHeight = 0;
    }
  });

  if (!isActive) {
    // If content is closed, open it
    accordionItem.classList.add('active');
    content.style.maxHeight = content.scrollHeight + 'px';
  } else {
    // If content is open, close it
    accordionItem.classList.remove('active');
    content.style.maxHeight = 0;
  }
}

// ================ Footer Year
const footerYear = document.getElementById('full-year');
footerYear.textContent = new Date().getFullYear();

// ================ Testimonials Slider
jQuery(document).ready(function ($) {
  $('#testimonials-slider').owlCarousel({
    loop: true,
    margin: 16,
    nav: false,
    dots: true,
    dotsEach: true,
    autoplay: true,
    responsiveClass: true,
    autoplayTimeout: 6000,
    smartSpeed: 400,
    slideBy: 1,
    dotsClass: 'testimonials-slider__dots',
    navContainerClass: 'testimonials-slider__nav',
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 1,
      },
      768: {
        items: 2,
        nav: true,
      },
      1024: {
        items: 2,
        margin: 20,
      },
    },
  });
});

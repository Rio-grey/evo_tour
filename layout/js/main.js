// const dropdownmenu = document.querySelector("#dropdownmenu");
// let dropdown = document.querySelector(".dropdown-menu");
// let add = document.querySelector(".add");
// dropdownmenu.addEventListener("click", function (event) {
//   dropdown.style.display = "block";
// });

// type number
const plus = document.querySelector(".plus"),
  minus = document.querySelector(".minus"),
  num = document.querySelector(".qty");
let a = 1;
plus.addEventListener("click", () => {
  a++;
  num.value = a;
  // console.log(num.value);
});
minus.addEventListener("click", () => {
  if (a > 1) {
    a--;
    num.value = a;
  }
});

// type number
const plus2 = document.querySelector(".plus2"),
  minus2 = document.querySelector(".minus2"),
  num2 = document.querySelector(".qty2");
let b = 0;
plus2.addEventListener("click", () => {
  b++;
  num2.value = b;
  // console.log(num.value);
});
minus2.addEventListener("click", () => {
  if (b > 0) {
    b--;
    num2.value = b;
  }
});

function scrollUp() {
  const scrollUp = document.getElementById("scroll-up");
  // When the scroll is higher than 460 viewport height, add the show-scroll class to the a tag with the scroll-top class
  if (this.scrollY >= 460) scrollUp.classList.add("show-scroll");
  else scrollUp.classList.remove("show-scroll");
}
window.addEventListener("scroll", scrollUp);

/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
  origin: "top",
  distance: "60px",
  duration: 2500,
  delay: 400,
  // reset: true
});

// sr.reveal(`.banners, .policy-item, .tour-last-item`);
// sr.reveal(
//   `.banner-2-img, .tour-destination-top-item, .tour-destination-bottom-item, .tour-blog-item`,
//   {
//     interval: 100,
//   }
// );
// sr.reveal(`.about__data, .discount__img`, { origin: "left" });
// sr.reveal(`.about__img, .discount__data`, { origin: "right" });
// var swiper = new Swiper(".mySwiper", {
//   slidesPerView: 4,
//   spaceBetween: 20,
//   slidesPerGroup: 4,
//   loop: true,
//   loopFillGroupWithBlank: true,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
// });
$(document).ready(function () {
  $(".tour-slider").slick({
    slidesToShow: 4,
    infinite: true,
    // autoplay: true,
    // autoplaySpeed: 2000,
    prevArrow: `<button type='button' class='slick-prev slick-arow'><ion-icon name="chevron-back-outline"></ion-icon></button>`,
    nextArrow: `<button type='button' class='slick-next slick-arow'><ion-icon name="chevron-forward-outline"></ion-icon></button>`,
  });
});
$(document).ready(function () {
  $(".tour-slider2").slick({
    slidesToShow: 12,
    infinite: true,
    // autoplay: true,
    // autoplaySpeed: 2000,
    dots: true,
  });
});

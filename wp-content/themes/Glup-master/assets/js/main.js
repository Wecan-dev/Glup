new WOW().init();

function addActiveNavLink() {
  const href = window.location.href;
  const links = $("#glupNavbar .nav-link").get();
  const activeLink = links.find((link) => link.href === href);
  if (activeLink) {
    activeLink.classList.add("active");
  }
}

addActiveNavLink();

$(window).scroll(function () {
  if ($(this).scrollTop()) {
    $(".js-gotop").fadeIn();
  } else {
    $(".js-gotop").fadeOut();
  }
});

$(".js-gotop").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 1000);
});

$(".main-banner-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
});

$(".main-license-slider").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow:
    "<button class='slick-prev slick-arrow' aria-label='Previous' type='button'><img class='slick-prev' src='http://159.89.229.55/Glup/wp-content/uploads/2020/11/arrow_left.png'></button>",
  nextArrow:
    "<button class='slick-next slick-arrow' aria-label='Next' type='button'><img class='slick-next' src='http://159.89.229.55/Glup/wp-content/uploads/2020/11/arrow_right.png'></button>",
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
      },
    },
  ],
});

$(".main-team-slider").slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow:
    "<button class='slick-prev slick-arrow' aria-label='Previous' type='button'><img class='slick-prev' src='http://localhost/glup/wp-content/uploads/2020/11/arrow_left.png'></button>",
  nextArrow:
    "<button class='slick-next slick-arrow' aria-label='Next' type='button'><img class='slick-next' src='http://localhost/glup/wp-content/uploads/2020/11/arrow_right.png'></button>",
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
      },
    },
  ],
});

$(".gallery-slider").slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
prevArrow:
    "<button class='slick-prev slick-arrow' aria-label='Previous' type='button'><img class='slick-prev' src='http://159.89.229.55/Glup/wp-content/uploads/2020/11/arrow_left.png'></button>",
  nextArrow:
    "<button class='slick-next slick-arrow' aria-label='Next' type='button'><img class='slick-next' src='http://159.89.229.55/Glup/wp-content/uploads/2020/11/arrow_right.png'></button>",
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
      },
    },
  ],
});

$(".solutions-slider").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow:
    "<button class='slick-prev slick-arrow' aria-label='Previous' type='button'><img class='slick-prev' src='http://localhost/glup/wp-content/uploads/2020/11/arrow_left.png'></button>",
  nextArrow:
    "<button class='slick-next slick-arrow' aria-label='Next' type='button'><img class='slick-next' src='http://localhost/glup/wp-content/uploads/2020/11/arrow_right.png'></button>",
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
      },
    },
  ],
});

$(".main-clients-slider").slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 1,
  prevArrow:
    "<button class='slick-prev slick-arrow' aria-label='Previous' type='button'><img class='slick-prev' src='http://localhost/glup/wp-content/uploads/2020/11/arrow_left_blue.png'></button>",
  nextArrow:
    "<button class='slick-next slick-arrow' aria-label='Next' type='button'><img class='slick-next' src='http://localhost/glup/wp-content/uploads/2020/11/arrow_right_blue.png'></button>",
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false,
        dots: true,
      },
    },
  ],
});

$(".main-stories-slider").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: $(".custom-prev"),
  nextArrow: $(".custom-next"),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

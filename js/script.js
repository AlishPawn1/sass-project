jQuery(function ($) {

  // Back to Top Button
  var btn = $('#button');

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
  });

  // hamburger



  // Sticky Header
  // if ($(window).scrollTop() > 100) {
  //   $('.header').addClass("sticky");
  // }

  // $(window).scroll(function () {
  //   if ($(this).scrollTop() > 100) {
  //     $('.header').addClass("sticky");
  //   } else {
  //     $('.header').removeClass("sticky");
  //   }
  // });
  var lastScrollTop = 0;

  $(window).scroll(function () {
    var currentScrollTop = $(this).scrollTop();
  
    if (currentScrollTop > lastScrollTop) {
      // Scrolling down
      $('.second-header').removeClass("sticky");
    } else {
      // Scrolling up
      if (currentScrollTop > 100) {
        $('.second-header').addClass("sticky");
      } else {
        $('.second-header').removeClass("sticky");
      }
    }
  
    lastScrollTop = currentScrollTop;
  });

  $(window).scroll(function() {
    if ($(this).scrollTop() > 300) {  
      $('.second-header').addClass("transform-sticky");
    }
    else if ($(this).scrollTop() > 0) {
      $('.second-header').addClass("mobile-view");
    } 
    else {
      $('.second-header').removeClass("transform-sticky mobile-view");
    }
  });
  
  



  // Dropdown Button

  $(document).ready(function() {
    $(".primary-menu li.menu-dropdown > a").append('<span class="dropdown-btn"><svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor"></path></svg></span>');
    $(".shop_type li.menu-dropdown > a , .shop_sort li.menu-dropdown > a" ).append('<span class="dropdown-btn"><i class="fa-solid fa-chevron-down"></i></span>');
    

    $('.dropdown-btn').on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parent().parent().toggleClass('open').first().siblings().removeClass('open');
        $(this).parent().parent().find("ul").parent().find("ul.sub-menu").first().slideToggle();
        $(this).parent().parent().siblings().find("ul.sub-menu").slideUp().parent().removeClass('open');
        $(this).toggleClass('transform-90');
        $(this).parent().parent().siblings().find('.dropdown-btn').removeClass('transform-90');
    });
});


$('.primary-menu li').has('ul').addClass('menu-dropdown');
$('.shop_type li, .shop_sort li').has('ul').addClass('menu-dropdown');


$(document).ready(function () {
  $('.hamburger').click( function(){
    $(this).toggleClass('active');
    $('.overlay-bg').toggleClass('active');
    $('.primary-menu').toggleClass('active');
  });

  $('.search-cart-user .side-btn button').click(function(event){
    event.preventDefault();
    event.stopPropagation();
    
    $('.slide-box').removeClass('active');
    $('.search-box input').focus();
    var index = $(this).closest('.side-btn').index();
    $('.slide-box').eq(index).addClass('active');
    $('.overlay-bg').toggleClass('active');

  });
  
  $('.overlay-bg').click(function(event){
    event.preventDefault();
    event.stopPropagation();
    $('.slide-box').removeClass('active');
    $('.overlay-bg').removeClass('active');
    $('.primary-menu').removeClass('active');
    $('.hamburger').removeClass('active');
  });

  $('.search-cart-user-box .icon').click(function(event){
    event.preventDefault();
    event.stopPropagation();
    $('.slide-box').removeClass('active');
    $('.overlay-bg').removeClass('active');
  });

  $('.cart_wishlist').click(function(){
    $(this).toggleClass('active');
  });

});

$(document).ready(function() {
  // Function to toggle sidebar and overlay visibility
  function toggleSidebar() {
    $('.block_category_side_box .close').toggleClass('active');
    $('.block_category_side_box .blog-sidebar').toggleClass('active');
    $('.block_category_side_box').toggleClass('active');
    $('.overlay-bg').toggleClass('active');
  }

  // Click event listener for category elements
  $('.blog_category, .block_category_side_box .close' ).click(function(event) {
    event.stopPropagation(); // Prevent event propagation
    toggleSidebar();
  });

  // // Click event listener for overlay
  $('.overlay-bg').click(function() {
    toggleSidebar();
    $('.overlay-bg').removeClass('active');
  });
});


$(document).ready(function() {
  // Set the date and time for the countdown
  var countDownDate = new Date("Feb 14, 2024 00:00:00").getTime();

  // Update the countdown every second
  var x = setInterval(function() {

      // Get the current date and time
      var now = new Date().getTime();
      
      // Calculate the time remaining
      var distance = countDownDate - now;
      
      // Calculate days, hours, minutes, and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
      // Display the countdown
      $(".days").text(days);
      $(".hours").text(hours);
      $(".minutes").text(minutes);
      $(".seconds").text(seconds);
      
      // If the countdown is over, display a message
      if (distance < 0) {
          clearInterval(x);
          $("#countdown").text("EXPIRED");
      }
  }, 1000);
});

// $("#slider").on("input change", (e)=>{
//   const sliderPos = e.target.value;
//   // Update the width of the foreground image
//   $('.foreground-img').css('width', `${sliderPos}%`)
//   // Update the position of the slider button
//   $('.slider-button').css('left', `calc(${sliderPos}%)`)
// });

$(document).ready(function(){
  $('.footer-detail .heading').click(function(event){
    if ($(window).width() <= 575) {
      event.preventDefault();
      event.stopPropagation(); 
    
      var $submenu = $(this).next('ul');
      
      $submenu.slideToggle('fast', function() {
        $submenu.toggleClass('active');
      });
      $(this).toggleClass('active');
      $(this).parent().siblings().find('ul').removeClass('active').hide();
    }
  });
  
  
  // $('.shop-tab .heading').click(function() {
  //   var tabId = $(this).attr('aria-labelledby');
    
  //   var tabLink = $('[data-bs-target="#' + tabId + '"]');
    
  //   tabLink.click();
  // });

  // $(document).ready(function() {
  //   if ($(window).width() <= 575) {
  //     $('.tab-pane').addClass('fade show active');
  //   }
  //   $(window).resize(function() {
  //     if ($(window).width() <= 575) {
  //       $('.tab-pane').addClass('fade show active');
  //     } else {
  //       $('.tab-pane').removeClass('fade show active');
  //     }
  //   });
  // });
  
  // $(document).ready(function() {
  //   $('.tab-pane .heading').click(function() {
  //     var tabPane = $(this).closest('.tab-pane');
  //     var shopTab = tabPane.find('.shop-tab');
      
  //     shopTab.slideToggle('fast');
  //     $(this).toggleClass('active');
      
  //     $('.tab-pane .shop-tab').not(shopTab).slideUp('fast');
  //   });
  // });

  $(document).ready(function() {
    $('.shop-tab .heading').click(function() {
        var tabId = $(this).attr('aria-labelledby');
        var tabLink = $('[data-bs-target="#' + tabId + '"]');
        tabLink.click();
    });

    // Adjust tab behavior based on window width
    function adjustTabs() {
        if ($(window).width() <= 575) {
            $('.tab-pane').addClass('fade show active');
        } else {
            $('.tab-pane').removeClass('fade show active');
        }
    }

    adjustTabs(); // Initial adjustment

    $(window).resize(function() {
        adjustTabs(); // Adjust on window resize
    });

    // Click event for collapsible content within tab panes
    $('.tab-pane .heading').click(function() {
        var tabPane = $(this).closest('.tab-pane');
        var shopTab = tabPane.find('.shop-tab');
        
        // Remove 'active' class from all headings within the same tab pane
        tabPane.find('.heading').removeClass('active');
        
        // Toggle 'active' class on the current heading
        $(this).toggleClass('active');
        
        // Slide toggle the shop tab
        shopTab.slideToggle('fast');
        
        // Slide up other shop-tabs
        $('.tab-pane .shop-tab').not(shopTab).slideUp('fast');
    });
});

  
  


});

$(document).ready(function () {
  if($(window).width() <= 575){
    $('.summer-winter-section').addClass('show-progress');
    $('.shop_relate_slide').addClass('show-progress');
  }
  else if($(window).width() <= 991){
    $('.relate_product_shop').addClass('show-progress');
    $('.blog_like').addClass('show-progress');

  }
});

// add sub
$(document).ready(function () {
  var x = parseInt($(".quantity").val()); 

  $(".plus").click(function () {
      $(".quantity").val(++x);
  });

  $(".minus").click(function () {
      if (x > 1) {
          $(".quantity").val(--x);
      } else {
          x = 1;
      }
  });
});


// $(document).ready(function() {
//   // Check if the current URL contains "index.php"
//   if (window.location.href.indexOf("index.php") > -1) {
//       // If it does, add the class to the header element
//       $("header").addClass("index-page");
//   }
// });


$(document).ready(function() {
  var pathname = window.location.pathname;
  if (pathname.endsWith("/index.php") || pathname === "/sass-project/") {
    $("header").addClass("index-page");
  }
});

$(document).ready(function() {
  $('.concept_community .content').hover(function() {
      $('.concept_community .image').addClass('hovered');
  }, function() {
      $('.concept_community .image').removeClass('hovered');
  });
});


});

// WOW.js Initialization
new WOW().init();

if (document.querySelector('.before-after-image')) {
  const container = document.querySelector('.before-after-image');
  document.querySelector('.slider').addEventListener('input', (e) => {
    container.style.setProperty('--position', `${e.target.value}%`);
  });
}

if (document.querySelector('.announcement-slide')) {
  var announcement_slide = new Splide('.announcement-slide', {
    perPage: 1,
    dots: false,
    rewind: true,
    autoplay: true,
    pagination: false,
  }); 
  announcement_slide.mount();
}
if (document.querySelector('.shop_relate_slide')) {
  var shop_relate_slide = new Splide('.shop_relate_slide', {
    perPage: 3,
    arrows: false,
    pagination: false,
    gap: 20,
    breakpoints: {
      991: {
        perPage: 2,
      },
      575: {
        perPage: 1,
      },
    },
  }).mount();

  // Function to update progress bar
  var updateProgressBar = function () {
    var bar = shop_relate_slide.root.querySelector('.my-slider-progress-bar');

    if (bar) {
      var end = shop_relate_slide.Components.Controller.getEnd() + 1;
      var rate = Math.min((shop_relate_slide.index + 1) / end, 1);
      bar.style.width = String(100 * rate) + '%';
    } else {
      console.error("Progress bar element not found.");
    }
  };

  // Call the function to update progress bar when slider is mounted
  updateProgressBar();

  // Event listener for slider movement
  shop_relate_slide.on('move', updateProgressBar);
}


if (document.querySelector('.banner-slide')) {
  var splide = new Splide('.banner-slide', {
    type: 'fade',
    rewind: true,
    perPage: 1,
    pagination: false,
    interval: 3000,
    breakpoints: {
      1024: {
        interval: 2000,
        arrows: false,
        pagination: true,
      },
    },
  });
  splide.mount();
}

if(document.querySelector('.shop_full_image')){
  var shop_full_image = new Splide('.shop_full_image',{
    perPage: 2,
    pagination: false,
    arrows: false,
    gap: 20,
    breakpoints: {
      575: {
        perPage: 1,
        pagination: true,
      },
    },
  }).mount();
}

if (document.querySelector('.single-slide')) {
  var single_slide = new Splide('.latest-slide', {
    perPage: 3,
    perMove: 1,
    pagination: false,
    breakpoints: {
      1024: {
        perPage: 2,
        gap: 20,
      },
      575: {
        perPage: 1,
      },
    },
  });

  single_slide.on('mounted move', function () {
    var bar = single_slide.root.querySelector('.my-slider-progress-bar');
    
    if (bar) {
      var end = single_slide.Components.Controller.getEnd() + 1;
      var rate = Math.min((single_slide.index + 1) / end, 1);
      bar.style.width = String(100 * rate) + '%';
    } else {
      console.error("Progress bar element not found.");
    }
  });

  single_slide.mount();
}

var productDiscountSliders = document.querySelectorAll(".product_discount");

productDiscountSliders.forEach(function(sliderElement) {
  new Splide(sliderElement, {
    type: 'loop',
    drag: 'free',
    focus: 'center',
    arrows: false,
    perPage: 4,
    pagination: false,
    autoScroll: {
      speed: 0.5,
    },
    breakpoints: {
      768: {
        perPage: 3,
        autoScroll: {
          speed: 0.5,
        },
      },
      575:{
        perPage: 2,
      }
    }
  }).mount(window.splide.Extensions);
});

var slideClasses = ['.collection-slide_1', '.collection-slide_2', '.product-full-slide', '.review-slide'];

slideClasses.forEach(function(slideClass) {
  if (document.querySelector(slideClass)) {
    var slider = new Splide(slideClass, {
      perPage: 1,
      pagination: false,
      rewind: true,
    });
    slider.mount();

    slider.on('moved', function() {
      const currentIndex = slider.index;
      console.log(currentIndex + 1);
      slider.root.querySelectorAll('.count').forEach(function(element) {
        element.textContent = currentIndex + 1;
      });
    });

    // Get the total number of slides and set the attribute
    if ($(slideClass + ' .splide__list').length) {
      var totalSlides = $(slideClass + ' .splide__list li').length;
      $(slideClass + ' .total-page').attr('slidernumber', totalSlides);
    }
  }
});

if (document.querySelector('.one-per-page')) {
  var one_per_page = new Splide('.one-per-page', {
    perPage: 1,
    pagination: false
  });

  one_per_page.on('mounted move', function () {
    var bar = one_per_page.root.querySelector('.my-slider-progress-bar');
    
    if (bar) {
      var end = one_per_page.Components.Controller.getEnd() + 1;
      var rate = Math.min((one_per_page.index + 1) / end, 1);
      bar.style.width = String(100 * rate) + '%';
    } else {
      console.error("Progress bar element not found.");
    }
  });

  one_per_page.mount();
}

if (document.querySelector('.promise-slide')) {
  var promise_slide = new Splide('.promise-slide', {
    perPage: 5,
    perMove: 1,
    arrows: false,
    pagination: false,
    breakpoints: {
      1024: {
        perPage: 4,
      },
      991: {
        perPage: 3,
      },
      575: {
        perPage: 2,
      },
    },
  });

  promise_slide.mount();
}

if(document.querySelector('.recent-slide')){
  var recent_slide = new Splide('.recent-slide',{
    pagination: false,
    arrows: false,
    perPage: 3,
    gap: 20,

    breakpoints:{
      1024: {
        perPage: 2,
      },
      575: {
        perPage: 1,
      },
    },
  }).mount();
}

if(document.querySelector('.main-slider')) {
  var mainSlider = new Splide('.main-slider', {
    type: 'fade',
    pagination: false,
    arrows: false,  
  }).mount();

  var thumbnailSlider = new Splide('.thumbnail-slider', {
    isNavigation: true,
    gap: 10,
    arrows: false,
    rewind: true,
    pagination: false,
    perPage: 6,
    perMove: 1,
    breakpoints: {
      1024: {
        arrows: true,
        perPage: 1, 
      },
    },
  }).mount();

  mainSlider.sync( thumbnailSlider );

  var thumbnailButtons = document.querySelectorAll('.thumbnail-slider .splide__list button');
  thumbnailButtons.forEach(function(button) {
    button.addEventListener('mouseenter', function() {
      var index = parseInt(button.getAttribute('data-slide-index'));
      mainSlider.go(index);

      thumbnailButtons.forEach(function(btn) {
        btn.classList.remove('active');
      });
      
      button.classList.add('active');
    });
  });
}

var images = document.querySelectorAll('.moving-image');
new simpleParallax(images);


if(document.querySelector('.shop_main')){
  // single-shop
  var shop_main = new Splide( '.shop_main', {
    type       : 'fade',
    pagination : false,
    arrows     : false,
    cover      : true,
  } );

  var shop_thumbnails = new Splide( '.shop_thumbnail', {
    rewind          : true,
    isNavigation    : true,
    fixedWidth      : 104,
    gap             : 10,
    pagination      : false,
    cover           : true,
    arrows          : false,
    dragMinThreshold: {
      mouse: 4,
      touch: 10,
    }
  });

  shop_main.on('mounted move', function () {
    var bar = shop_main.root.querySelector('.my-slider-progress-bar');
    
    if (bar) {
      var end = shop_main.Components.Controller.getEnd() + 1;
      var rate = Math.min((shop_main.index + 1) / end, 1);
      bar.style.width = String(100 * rate) + '%';
    } else {
      console.error("Progress bar element not found.");
    }
  });

  shop_main.sync( shop_thumbnails );
  shop_main.mount();
  shop_thumbnails.mount();
}


if(document.querySelector('.share-button')){
  document.addEventListener("DOMContentLoaded", function() {
    const shareButton = document.querySelector('.share-button');

    shareButton.addEventListener('click', function() {
        if (navigator.share) {
            navigator.share({
                title: 'Example Title',
                text: 'Example Text',
                url: 'https://example.com'
            }).then(() => {
                console.log('Successfully shared');
            }).catch(error => {
                console.error('Error sharing:', error);
            });
        } else {
            console.log('Web Share API is not supported');
        }
    });
});
}

if(document.querySelector('.blog_side_slide')){
  var blog_side_slide = new Splide('.blog_side_slide',{
    pagination: false,
  }).mount();
}

if (document.querySelector('.blog_main_slide')) {
  var blog_main_slide = new Splide('.blog_main_slide', {
    perPage: 3,
    gap: 20,
    pagination: false,
    breakpoints: {
      1024: {
        perPage: 2,
      },
      575: {
        perPage: 1,
      }
    },
  });

  blog_main_slide.on('mounted move', function () {
    var bar = blog_main_slide.root.querySelector('.my-slider-progress-bar');
    
    if (bar) {
      var end = blog_main_slide.Components.Controller.getEnd() + 1;
      var rate = Math.min((blog_main_slide.index + 1) / end, 1);
      bar.style.width = String(100 * rate) + '%';
    } else {
      console.error("Progress bar element not found.");
    }
  });

  blog_main_slide.mount();
}

if(document.querySelector(".carousel_item_shop")){
  var shop_item = new Splide(".carousel_item_shop",{
    perPage: 4,
    perMove: 1,
    arrows: false,
    pagination: false,
    breakpoints: {
      1024: {
        perPage: 4,
      },
      991: {
        perPage: 3,
      },
      575: {
        perPage: 2,
      },
    },
  }).mount();
}

function toggleForm(formClassName) {
  var form = $('.' + formClassName);
  $('.shop_review_form').not(form).slideUp();
  form.slideToggle();
}

document.addEventListener('DOMContentLoaded', function() {
  const stars = document.querySelectorAll('.rating .star');

  stars.forEach(star => {
      star.addEventListener('click', function() {
          const value = parseInt(this.getAttribute('data-value'));
          stars.forEach((s, index) => {
              if (index < value) {
                  s.classList.add('selected');
              } else {
                  s.classList.remove('selected');
              }
          });
      });
  });
});

if(document.querySelector('.blog_full_slide')){
  var blog_full_slide = new Splide('.blog_full_slide',{
    pagination: false,
    direction: 'ttb',
    height   : '70vh',
    arrows: false,
    wheel    : true,

    breakpoints: {
      1024: {
        direction: 'ltr',
        height   : 'auto',
        // wheel: false,
        gap: 20,
        perPage: 2,
      },
      575: {
        perPage: 1,
      }
    },
  })
  
  blog_full_slide.on('mounted move', function () {
    var bar = blog_full_slide.root.querySelector('.my-slider-progress-bar');
    
    if (bar) {
      var end = blog_full_slide.Components.Controller.getEnd() + 1;
      var rate = Math.min((blog_full_slide.index + 1) / end, 1);
      bar.style.width = String(100 * rate) + '%';
    } else {
      console.error("Progress bar element not found.");
    }
  });
  
  blog_full_slide.mount();
}
if(document.querySelector('.blog_like_splide')){
  var blog_like_splide = new Splide('.blog_like_splide',{
    pagination: false,
    arrows: false,
    perPage: 3,
    gap: 50,
    breakpoints: {
      1025:{
        gap: 30,
        perPage: 2,
      },
      991: {
        perPage: 2,
        // gap: 30,
      },
      575: {
        perPage: 1,
      },
    },
  })
  blog_like_splide.on('mounted move', function () {
    var bar = blog_like_splide.root.querySelector('.my-slider-progress-bar');
    
    if (bar) {
      var end = blog_like_splide.Components.Controller.getEnd() + 1;
      var rate = Math.min((blog_like_splide.index + 1) / end, 1);
      bar.style.width = String(100 * rate) + '%';
    } else {
      console.error("Progress bar element not found.");
    }
  });
  blog_like_splide.mount();
}
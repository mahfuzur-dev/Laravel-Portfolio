// sticky menu js
$(window).scroll(function(){
    var sticky = $(this).scrollTop()
    if(sticky > 300){
      $('.navbar').addClass('sticki_menu')
    }
    else{
      $('.navbar').removeClass('sticki_menu')
    }
  });
  
  // sticky menu js
  // counter js

  $(function(){
    jQuery(document).ready(function($) {
      $('.counter').counterUp({
          delay: 10,
          time: 1800,
      });
      
  });
  });
    // counter js
    // mixit js
    
    $(document).ready(function() {
      mixitup(".port_mixit")
    });
    // mixit js
    // slick js
    $('.slick').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow:false,
      nextArrow:false,
      dots:true,
    });
    // slick js
    
//back to top

let calcScrollValue = () => {
      let scrollProgress = document.getElementById("progress_t");
      let progressValue = document.getElementById("progres-value");
      let pos = document.documentElement.scrollTop;
      let calcHeight =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
      let scrollValue = Math.round((pos * 100) / calcHeight);
      if (pos > 100) {
        scrollProgress.style.display = "grid";
      } else {
        scrollProgress.style.display = "none";
      }
      scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
      });
      scrollProgress.style.background = `conic-gradient(#03cc65 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
    };
    
    window.onscroll = calcScrollValue;
    window.onload = calcScrollValue;


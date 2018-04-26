
    $(document).on('ready', function() {
    $(".lazy").slick({
    autoplay:true,
    autoplaySpeed:3000,
      dots: false,
    infinite: true,
      speed: 1000,
      arrows:false,
      mobileFirst:true,
      fade:true,
      cssEase: 'linear',
      pauseOnHover:false,
      pauseOnDotsHover:false
      });

    $(".regular").slick({

      arrows:false,  
    dots:true,
    rows:2,
    speed: 2000,
        slidesToShow: 2,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 4000,
   responsive: [
    {
      breakpoint: 768,
      settings: {
       slidesToScroll: 1,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
       slidesToScroll: 1,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
      });

     $(".product").slick({
       cssEase: 'linear',
           speed: 1000,
  centerMode: false,
  centerPadding: '20px',
  slidesToShow: 4,
   responsive: [
    {
      breakpoint: 768,
      settings: {
        rows:1,
        slidesToScroll: 1,
        arrows: false,
        // centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        rows:1,
        slidesToScroll: 1,
        arrows: false,
        // centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    }
  ]
  
      });

    });

 

  
$(document).on('ready', function() {
      
      
      $('.center').slick({
         cssEase: 'linear',
           speed: 1000,
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 2,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
  
   
    });



 var slider = new MasterSlider();
         
        slider.control('arrows');  
        slider.control('thumblist' , {autohide:false ,dir:'h',arrows:true, align:'bottom', width:127, height:137, margin:5, space:5});
     
        slider.setup('masterslidershop' , {
            width:300,
            height:300,
            space:5,
            view:'scale'
        });

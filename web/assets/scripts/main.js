$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});

/*  MAIN WEBSITE SIDENAV */
function openNav() {
    document.getElementById("menu_mySidenav").style.width = "320px";
  }
  
  function closeNav() {
    document.getElementById("menu_mySidenav").style.width = "0";
  }


/*  LANDING PAGE CONTACT FORM SIDENAV  */
function openForm() {
    document.getElementById("lp-contact_Form").style.width = "380px";
  }
  
  function closeForm() {
    document.getElementById("lp-contact_Form").style.width = "0";
  }


/*  HOME PAGE VIDEO OVERLAY */
function openVideo() {
  document.getElementById("watchVideo").style.height = "100%";
}

function closeVideo() {
  document.getElementById("watchVideo").style.height = "0%";
}
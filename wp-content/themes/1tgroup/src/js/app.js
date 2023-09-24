import 'bootstrap';
import '../scss/main.scss';

var $ = require('jquery');
window.jQuery = $;
window.$ = $;

var loadTouchEvents = require('jquery-touch-events');
const owlCarousel = require('owl.carousel');

  
      //Gallery order
  var test = function(){
    var COL_COUNT = 3; // set this to however many columns you want
    var arr = [300, 270, 250, 240, 290, 320];
    var col_heights = [];
    var container = document.querySelector('.gallery__images');
    
    
    for (var i = 0; i <= COL_COUNT; i++) {
      col_heights.push(0);
    }

    for (var i = 0; i < container.children.length; i++) {
      var order = (i + 1) % COL_COUNT || COL_COUNT;

      container.children[i].style.order = order;

      var setHeight = arr[Math.floor(Math.random()*arr.length)];

      container.children[i].style.height = setHeight.toString() + 'px';
      
      var child_height = parseFloat(container.children[i].style.height); 
      
      col_heights[order] += child_height;
    }
    var highest = Math.max.apply(Math, col_heights);
    container.style.height = highest+'px'; 
  }


     // carousel team
    $('.owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1600:{
                items:4
            }
        }
    });

    function openNav(){
      /*$(".navigation").css({
          "width": "100%", 
          "opacity": "1", 
          "transform": "translateX(0rem)"
        });*/
      $('.navigation').addClass('open-nav');
      $('.navigation__button')
        .find('.navigation__button--close')
        .removeClass()
        .addClass('navigation__button--open');

       $('.submenu').addClass('submenu-open')
         .removeClass('submenu-close');

       /*$('.sub').addClass('sub-hidden');*/
       $('.header__logo-box').addClass('down');
       $('.swipe').addClass('swipe-left');
    }

    function closeNav(){
       /*$(".navigation").css({
          "width": "0", 
          "opacity": "0", 
          "transform": "translateX(-8rem)"
        });*/
        $('.navigation').removeClass('open-nav');       
       $('.navigation__button')
        .find('.navigation__button--open')
        .removeClass()
        .addClass('navigation__button--close');
        $('.submenu').addClass('submenu-close')
          .removeClass('submenu-open');
       /* $('.sub').removeClass('sub-hidden');*/
        $('.header__logo-box').removeClass('down');
        $('.swipe').removeClass('swipe-left');
    }

    //open & close menu
    var count = 0;
    $('.navigation__button').click(function(){
       if(count%2 == 0){
         openNav();
         count++;
       }else{
         closeNav();
         count--;
       }
    });


    // Gallery active class
    $('a.gallery__link').click(function(event){
        if($(this).hasClass('active')){
          event.preventDefalut();
        }else{
          $('a.gallery__link').removeClass("active");
          $(this).addClass("active");
        }
    });

    var timer 
    var prevScrollpos = window.pageYOffset;
    $(window).scroll(function() {
      $('.swipe').stop().animate({opacity:1},.5);
      clearInterval(timer);
      timer= setInterval(function() {
        $('.swipe').stop().animate({opacity:0.3},'fast');
      },100);



      if($(window).scrollTop() < 1){
        $(".submenu").addClass('top-hidden');
      }else{
        $(".submenu").removeClass('top-hidden');
        
      }
      //hide header on top
     /* var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        $(".submenu").addClass('top-hidden');
      } else {
        $(".submenu").removeClass('top-hidden');
       prevScrollpos = currentScrollPos;
      }*/
    });


    //White mode
    $('.contrast').click(function(){
      $('body, .body-index, .navigation, .header').toggleClass('white-bg');
      $('.navigation__link, .navigation__text-logo, .navigation__link span').toggleClass('white-nav-text');
      $('.navigation__dropdown-list').toggleClass('dropdown_list-light');
    })


   
    var w = $(window).width();

    //if ((Modernizr.mq('(max-width:800px)'))) {
    if(w < 800 ) {
      $('body').on('swiperight', function() {
          openNav();
      });

      $('.navigation').on('swipeleft', function() {
          closeNav();
      });
    }
  
    


    test();

    //Gallery filter
    $(".gallery__link").click(function(){
        var value = $(this).attr('data-filter');
         test();
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
        }
    });



/*function test(){
  var COL_COUNT = 3; // set this to however many columns you want
  var col_heights = [];
  var container = document.querySelector('.gallery__images');
  for (var i = 0; i <= COL_COUNT; i++) {
    col_heights.push(0);
  }
  console.log(col_heights.length);
  for (var i = 0; i < container.children.length; i++) {
    var order = (i + 1) % COL_COUNT || COL_COUNT;
    container.children[i].style.order = order;
    col_heights[order] += parseFloat(container.children[i].style.height);
    
  }
  var highest = Math.max.apply(Math, col_heights);
  container.style.height = highest+'px';  
}
*/


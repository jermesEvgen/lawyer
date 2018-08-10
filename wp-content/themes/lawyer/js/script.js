// jQuery(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		jQuery("img[src*='svg']").attr("src", function() {
			return jQuery(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
// 	jQuery("form").submit(function() { //Change
// 		var th = jQuery(this);
// 		jQuery.ajax({
// 			type: "POST",
// 			url: "mail.php", //Change
// 			data: th.serialize()
// 		}).done(function() {
// 			alert("Thank you!");
// 			setTimeout(function() {
// 				// Done Functions
// 				th.trigger("reset");
// 			}, 1000);
// 		});
// 		return false;
// 	});

	//Chrome Smooth Scroll
	// try {
	// 	jQuery.browserSelector();
	// 	if(jQuery("html").hasClass("chrome")) {
	// 		jQuery.smoothScroll();
	// 	}
	// } catch(err) {

	// };

	jQuery("img, a").on("dragstart", function(event) { event.preventDefault(); });
	


 //  Загрузка прелоадера 

jQuery(window).load(function() {

	jQuery(".loader_inner").fadeOut();
	jQuery(".loader").delay(400).fadeOut("slow");

});




// Убираем class="smoothscroll" у первого элемента меню 
jQuery(document).ready(function(){
       
   // jQuery('.menu ul li a').addClass('smoothscroll');
   // jQuery('.menu.menu__tip ul li a').removeClass('smoothscroll');
   // jQuery('.menu ul li a[href="http://lawyer.io/o-kompanii"]').removeClass('smoothscroll');


// Плавная подкрутка 
jQuery('.smoothscroll').on('click', function (e) {
          
   e.preventDefault();

   var target = this.hash,
    jQuerytarget = jQuery(target);

    jQuery('html, body').stop().animate({
      'scrollTop': jQuerytarget.offset().top
    }, 800, 'swing', function () {
      window.location.hash = target;
    });

  }); 


}); 





// Событие hover для секции кейсы 
jQuery(document).ready(function(){

	jQuery('.casesItem').hover(function(){
    
	   jQuery(this).addClass('casesItem-active');	
	   jQuery(this).children('.casesItem__title:parent').css('color','#444444');
	   jQuery(this).children('.casesItem__btn').css({'background-color':'#92BDD2',
	   	                         'color':'#fff'});

	}, function() {	   
	   jQuery(this).removeClass('casesItem-active');
	   jQuery(this).children('.casesItem__title h4').css('color','#314368');
	   jQuery('.casesItem__btn').css({'background-color':'#fff',
	   	                         'color':'#92BDD2'});
	});


}); 

// Событие hover для ссылки телефон в topheader
// jQuery(document).ready(function(){

//   jQuery('.headerMain__top_cta').mouseenter(function(){    
//      jQuery('.header_phone').replaceWith(' <a class="header_phone" href="tel:+78182408800"  > <i class="material-icons">perm_phone_msg</i>+7 (8182) 40-88-00</a> '); 
//   }); 
//   jQuery('.headerMain__top_cta').mouseleave(function(){    
//      jQuery('.header_phone').replaceWith(' <a class="header_phone" href="tel:+78182408800"  > <i class="material-icons">phone</i>+7 (8182) 40-88-00</a> '); 
//   }); 

// }); 



// Табы на форме обратной связи 

jQuery(document).ready(function(){
  
  jQuery(".ctaFormTabs__items").not(":first").hide();
  jQuery(".ctaFormTab__item").click(function() {
      jQuery(" .ctaFormTab__item").removeClass("ctaFormTab__item-active").eq(jQuery(this).index()).addClass("ctaFormTab__item-active");
      jQuery(".iconSvg").removeClass("iconSvg__act").eq(jQuery(this).index()).addClass("iconSvg__act");
    	jQuery(".ctaFormTabs__items").hide().eq(jQuery(this).index()).fadeIn();
    }).eq(0).addClass("ctaFormTab__item-active");
  
  jQuery('.iconSvg:first').addClass("iconSvg__act");
    
});  


    //  Переход по клику логотип  на страницу index
     // jQuery(document).on('click' ,'.headerMain__logo', function(event){
     //  event.preventDefault();
     //  location.reload();
     //  location.href="http://lawyer.io";
     // });

     // jQuery(document).on('click' ,'.menu_active ul li:first', function(event){
     //  event.preventDefault();
     //  location.reload();
     //  location.href="http://lawyer.io";
     // });



     // jQuery(document).on('click' ,'.headerCompany__top_logo', function(event){
     //  event.preventDefault();
     //  location.reload();
     //  location.href="index.html";
     // });


     // jQuery(document).on('click' ,'.servicesItems', function(event){
     //  event.preventDefault();
     //  location.reload();
     //  location.href="services.html";
     // });


      // Меню на главной странице 


  	
      jQuery(document).ready(function(){

      // scroller.init(); // Инициализируем скрипт top-top

      var link = jQuery('.menu-link ');
      var link_active = jQuery('.menu-link_active');
      var menu = jQuery('.menu');
      var nav_link =jQuery('.menu a');
      link.click(function(){
          link.toggleClass('menu-link_active');
//           jQuery('body').toggleClass('fixed');
          menu.toggleClass('menu_active');  
          logo_info.toggle();         
          jQuery('.menu_active ul li a').css('color','#2D476A');
      });
      nav_link.click(function(){
          link.removeClass('menu-link_active');
          menu.toggleClass('menu_active');
//           jQuery('body').toggleClass('fixed');
        });

      });
      
      // jQuery(window).on('resize',function(){
      //   jQuery('.menu ul').toggleClass('js-resizeImg');

      // });

       // window.addEventListener("orientationchange", function() {
        // jQuery(".menu_active img").toggle();
        // jQuery(".menu-link").removeClass('menu-link_active ');
        // jQuery('body').toggleClass('fixed');
      // }, false);

 /* Фиксирование body при menu active*/

      // jQuery('.menu-link').click(function(){
      //   jQuery('body').toggleClass('fixed');

      // });

      // jQuery('.menu a').click(function(){
      //   jQuery('body').toggleClass('fixed');
      // });


      // jQuery(".menu ul li a").click(function(e) {
      //   e.preventDefault();
      //   jQuery(".menu-link_active span:last").removeClass('js-hamburger-title');
      //   jQuery('.menu-link_active span:last').addClass('js-hamburger-title');
      // })


      // jQuery('.menu ul li ').hover(function(){
      // 	link.addClass('js-hamburger-title');
      // },function(){
      // 	link.toggleClass('menu-link_active');
      // });



    // Фиксированное меню
    jQuery(document).ready(function(jQuery){
      var mainHeader = jQuery('.cd-auto-hide-header'),

        // secondaryNavigation = jQuery('.cd-secondary-nav'),
        //this applies only if secondary nav is below intro section
        belowNavHeroContent = jQuery('.sub-nav-hero'),
        headerHeight = mainHeader.height();
      
      //set scrolling variables
      var scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150;

      mainHeader.on('click', '.nav-trigger',   function(event){
        // open primary navigation on mobile
        event.preventDefault();
        mainHeader.toggleClass('nav-open');
      }); 
      mainHeader.on('click', '#cd-navigation a',   function(event){
        // open primary navigation on mobile
        event.preventDefault();
        mainHeader.toggleClass('nav-open');
      });

      jQuery(window).on('scroll', function(){
        if( !scrolling ) {
          scrolling = true;
          (!window.requestAnimationFrame)
            ? setTimeout(autoHideHeader, 250)
            : requestAnimationFrame(autoHideHeader);
        }
      });

      jQuery(window).on('resize', function(){
        headerHeight = mainHeader.height();
      });

      function autoHideHeader() {
        var currentTop = jQuery(window).scrollTop();

        ( belowNavHeroContent.length > 0 ) 
          ? checkStickyNavigation(currentTop) // secondary navigation below intro
          : checkSimpleNavigation(currentTop);

          previousTop = currentTop;
        scrolling = false;
      }

      function checkSimpleNavigation(currentTop) {
        //there's no secondary nav or secondary nav is below primary nav
          if (previousTop - currentTop > scrollDelta) {
            //if scrolling up...
            mainHeader.removeClass('is-hidden');
          } else if( currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            //if scrolling down...
            mainHeader.addClass('is-hidden');
          }
      }

    });



     // Медиа запросы для замены текста в кноках 

     var handleMatchMedia = function(mediaQuery) {
         if (mediaQuery.matches) {
         // если менее 768px или равное, то выполняется код между скобок  

         jQuery('.header__info_phn').hide();
         jQuery('.btnHeader ').text('Бесплатная консультация');

         jQuery(function(jQuery) {

              jQuery(window).scroll(function(){
           
                  if(jQuery(this).scrollTop()>100){
                    jQuery('.header__info_phn').hide();

                 }
                  else if (jQuery(this).scrollTop()<100){

                    jQuery('.header__info_phn').hide();
                 }

              });
          });


         } else {
         // обратное условие, т.е если более 768px 
         jQuery('.header__info_phn').show();
         jQuery('.btnHeader ').text('Получить бесплатную консультацию');

         jQuery(function(jQuery) {

              jQuery(window).scroll(function(){
           
                  if(jQuery(this).scrollTop()>100){
                    jQuery('.header__info_phn').show();

                 }
                  else if (jQuery(this).scrollTop()<100){

                    jQuery('.header__info_phn').show();
                 }

              });
          });




          }
     },
     mql = window.matchMedia('all and (max-width: 768px)');
     handleMatchMedia(mql);
     mql.addListener(handleMatchMedia); 







//  Меняем background-color на типовых страницах при скроле 

// jQuery(document).ready(function(){
// var handleMatchMedia = function(mediaQuery) {
//     if (mediaQuery.matches) {
//     // если менее 992px или равное, то выполняется код между скобок  


//     jQuery(function(jQuery) {

//          jQuery(window).scroll(function(){
      
//              if(jQuery(this).scrollTop()>100){
//                jQuery('.headerCompany').addClass('headerCompany__scroll');
//                jQuery('.hamburger').addClass('hamburger__scroll');

//                jQuery('.hamburger-title').css('color','#314368');
//                jQuery('.headerCompany__btn').addClass('headerCompany__btn_scroll');
//                jQuery('.headerLogo__scroll').hide();

//                // event.preventDefault();
//             }
//              else if (jQuery(this).scrollTop()<100){
//               jQuery('.headerCompany').removeClass('headerCompany__scroll');
//               jQuery('.hamburger').removeClass('hamburger__scroll');
//               jQuery('.hamburger-title').css('color','#fff');
//               jQuery('.headerCompany__btn').removeClass('headerCompany__btn_scroll');
//               // event.preventDefault();

//             }

//          });
//      });


//     } else {
//     // обратное условие, т.е если более 992px 


//     jQuery(function(jQuery) {

//          jQuery(window).scroll(function(){
      
//              if(jQuery(this).scrollTop()>100){
//            //значение 

//             }
//              else if (jQuery(this).scrollTop()<100){
//            //значение
//             }

//          });
//      });


//      }
// },
// mql = window.matchMedia('all and (max-width: 992px)');
// handleMatchMedia(mql);
// mql.addListener(handleMatchMedia); 
// });

  
/* Адаптивная таблица*/
jQuery(document).ready(function(){

   var handleMatchMedia = function(mediaQuery) {
       if (mediaQuery.matches) {
       // если менее 768px или равное, то выполняется код между скобок  
        jQuery('.tablica__body :nth-child(1)').prepend('<span class="js-sapn">Номер позиции</span>');
        jQuery('.tablica__body :nth-child(2)').prepend('<span class="js-sapn">Вид услуги</span>');
        jQuery('.tablica__body :nth-child(3)').prepend('<span class="js-sapn">Время, затраченное на оказании услуги</span>');
        jQuery('.tablica__body :nth-child(4)').prepend('<span class="js-sapn">Стоимость услуг на 2017/18 год</span>');

       } else {
       // обратное условие, т.е если более 768px 
       jQuery('.js-sapn').remove();
       }
   },
   mql = window.matchMedia('all and (max-width: 768px)');
   handleMatchMedia(mql);
   mql.addListener(handleMatchMedia); 

});



jQuery(document).ready(function(){
  jQuery('.headerLogo__scroll').hide();
});



/* ====

разрешение экранов <=992px  
_____
max-width: 992px
======*/

jQuery(document).ready(function(){

   var handleMatchMedia = function(mediaQuery) {
      
       if (mediaQuery.matches) {
       jQuery('.headerMain__logo').hide();
       jQuery('.menu ul li a').css('color','#2D476A');


           jQuery(window).scroll(function(){
           
               if(jQuery(this).scrollTop()>100){
                jQuery('.hamburger').addClass('hamburger__scroll');
                jQuery('.hamburger-title').addClass('js-hamburger-title__scroll');

                jQuery('.headerMain').css('background-color','#fff');
                jQuery('.headerMain__logo').wrapInner('<img src="http://lawyer.io/wp-content/uploads/2018/05/logoScroll2.png">');
                jQuery('.menu ul li a').css('color','#2D476A');
                // jQuery('.menu_active ul li a').css('color','#2D476A');
                // jQuery('.headerMain__btn').addClass('js-headerMain__btn');
    

                // event.preventDefault();
              }
               else if (jQuery(this).scrollTop()<100){
                jQuery('.hamburger').removeClass('hamburger__scroll');

                jQuery('.headerMain').css('background-color','transparent');
                jQuery('.headerMain__logo').wrapInner('<img src="http://lawyer.io/wp-content/uploads/2018/05/logoHeader2.png">');
                // jQuery('.menu ul li a').css('color','#2D476A');
                // jQuery('.headerMain__btn').removeClass('js-headerMain__btn');

                // event.preventDefault();

              }

           });
                
       } else {
       jQuery('.headerMain__logo').hide();  
       // jQuery('.menu ul li a').css('color','#304368');


         jQuery(window).scroll(function(){
         
             if(jQuery(this).scrollTop()>100){
              jQuery('.headerMain').css('background-color','#fff');
              jQuery('.hamburger-title').addClass('js-hamburger-title__scroll');
              jQuery('.headerMain__logo').wrapInner('<img src="http://lawyer.io/wp-content/uploads/2018/05/logoScroll2.png">');
              // jQuery('.menu ul li a').css('color','#2D476A');
              // jQuery('.headerMain__btn').addClass('js-headerMain__btn');
              jQuery('.hamburger').addClass('hamburger__scroll');
              jQuery('.header_phone').addClass('js-header-phone');


              // event.preventDefault();
            }
             else if (jQuery(this).scrollTop()<100){
              // jQuery('.hamburger').removeClass('hamburger__scroll');
              jQuery('.hamburger-title').removeClass('js-hamburger-title__scroll');

              jQuery('.headerMain').css('background-color','transparent');
              jQuery('.headerMain__logo').wrapInner('<img src="http://lawyer.io/wp-content/uploads/2018/05/logoHeader2.png">');
              // jQuery('.menu ul li a').css('color','#304368');
              // jQuery('.headerMain__btn').removeClass('js-headerMain__btn');
              jQuery('.hamburger').removeClass('hamburger__scroll');
              jQuery('.header_phone').removeClass('js-header-phone');

              // event.preventDefault();

            }

         });


       }
   },
   mql = window.matchMedia('all and (max-width: 992px)');
   handleMatchMedia(mql);
   mql.addListener(handleMatchMedia); 

});


//  Добавить <br> в спанах в footer 
jQuery(document).ready(function(){

   var handleMatchMedia = function(mediaQuery) {
      if (mediaQuery.matches) {
        jQuery('.contactBlock__span').append('<br>');           
       } else {
       	jQuery('.contactBlock br').css('display','none');
       }
   },
   mql = window.matchMedia('all and (max-width: 480px)');
   handleMatchMedia(mql);
   mql.addListener(handleMatchMedia); 

});



 // Событие hover для замены картинок с активных на ховера
  jQuery('.imgServHover').hide();

      
      jQuery('.servicesItems, .casesItem').on('mouseenter', function() {
        jQuery(this).find('.imgServ').toggle();
        jQuery(this).find('.imgServHover').addClass('imgServ__rotate').toggle();
        jQuery(this).find('.servicesItems__title h4').css('color','#fff');
      });
      jQuery('.servicesItems, .casesItem').on('mouseleave', function() {
        jQuery(this).find('.imgServ').toggle();
        jQuery(this).find('.imgServHover').addClass('imgServ__rotate').toggle();
        jQuery(this).find('.servicesItems__title h4').css('color','#161617');
      });




  // Google map
          function ShowPositon(x, y) {
              var element = document.getElementById('map_canvas');    
              var options = {
                  center: new google.maps.LatLng(x, y),
                  zoom: 13,
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                  styles: [
                               {elementType: 'geometry', stylers: [{color: 'none'}]},
                              {elementType: 'labels.text.stroke', stylers: [{color: '#FDF7F0'}]},
                              {elementType: 'labels.text.fill', stylers: [{color: 'none'}]},
                                   {
                                     featureType: 'administrative.locality',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#d59563'}]
                                   },
                                   {
                                     featureType: 'poi',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'poi.park',
                                     elementType: 'geometry',
                                     stylers: [{color: '#C2DCA1'}]
                                   },
                                   {
                                     featureType: 'poi.park',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#0B0802'}]
                                     // stylers: [{color: '#DAB238'}] 
                                   },
                                   {
                                     featureType: 'road',
                                     elementType: 'geometry',
                                     stylers: [{color: '#EFF4F6'}]
                                   },
                                   {
                                     featureType: 'road',
                                     elementType: 'geometry.stroke',
                                     stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'road',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'road.highway',
                                     elementType: 'geometry',
                                     stylers: [{color: '#9FA2A3'}]
                                   },
                                   {
                                     featureType: 'road.highway',
                                     elementType: 'geometry.stroke',
                                     stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'road.highway',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'transit',
                                     elementType: 'geometry',
                                     stylers: [{color: '#151003'}]
                                   },
                                   {
                                     featureType: 'transit.station',
                                     elementType: 'labels.text.fill',
                                     // stylers: [{color: '#0B0802'}]
                                   },
                                   {
                                     featureType: 'water',
                                     elementType: 'geometry',
                                     stylers: [{color: '#DFDFDF'}]
                                   },
                                   {
                                     featureType: 'water',
                                     elementType: 'labels.text.fill',
                                     stylers: [{color: '#515c6d'}]
                                   },
                                   {
                                     featureType: 'water',
                                     elementType: 'labels.text.stroke',
                                     stylers: [{color: '#17263c'}]
                                   }
                                 ]
              };

              var myMap = new google.maps.Map(element, options);
                  addMarker({
                          coordinates:{lat:64.532286, lng:40.523189},
                          info: '<h4>163000, набережная Северной Двины, 71/1 оф. 215.</h4>',
                          image: 'http://lawyer.io/wp-content/uploads/2018/04/pin.png'

                  });

                   function addMarker(properties){
                    var marker = new google.maps.Marker({
                      position: properties.coordinates,
                      map: myMap,
                      // icon: properties.image
                      });
                     if (properties.image) 
                     {
                      marker.setIcon(properties.image);
                     }
                     if (properties.info) 
                     {
                        var InfoWindow = new google.maps.InfoWindow({
                            content: properties.info
                            })
                            
                            marker.addListener('click', function(){
                              InfoWindow.open(myMap, marker);
                                })           
                     }
                  }
          }


      
      /* Datepicker */
      
      jQuery(function () {
        jQuery('#datetimepicker1').datetimepicker({
        locale: 'ru',
      stepping:10,
      format: 'DD.MM.YYYY',
      defaultDate: moment('01.11.2017').format('DD.MM.YYYY'),
      daysOfWeekDisabled:[0,6]
      });
        jQuery('#datetimepicker2').datetimepicker({
        locale: 'ru'
      });
      });



      /* MASK-PHONE*/
      jQuery(function() {
        jQuery('.<a href="https://www.jqueryscript.net/time-clock/">date</a>').mask('99/99/9999');
        jQuery('.time').mask('99:99:99');
        jQuery('.date_time').mask('99.99.9999 99:99');
        jQuery('.cep').mask('99999-999');
        jQuery('.phone').mask('9999-9999');
        jQuery('.phone').mask('+7(999) 999-99-99');
        jQuery('.phone_with_ddd').mask('(99) 9999-9999');
        jQuery('.phone_us').mask('(999) 999-9999');
        jQuery('.mixed').mask('AAA 000-S0S');

        jQuery('.cep_with_callback').mask('00000-000', {onComplete: function(cep) {
            console.log('Mask is done!:', cep);
          },
           onKeyPress: function(cep, event, currentField, options){
            console.log('An key was pressed!:', cep, ' event: ', event, 'currentField: ', currentField.attr('class'), ' options: ', options);
          }
        });

        jQuery('.crazy_cep').mask('00000-000', {onKeyPress: function(cep){
          var masks = ['00000-000', '0-00-00-00'];
            mask = (cep.length>7) ? masks[1] : masks[0];
          jQuery('.crazy_cep').mask(mask, this);
        }});

        jQuery('.cpf').mask('999.999.999-99', {reverse: true});
        jQuery('.money').mask('000.000.000.000.000,00', {reverse: true});

        var SaoPauloCelphoneMask = function(phone, e, currentField, options){
          return phone.match(/^(\(?11\)? ?9(5[0-9]|6[0-9]|7[01234569]|8[0-9]|9[0-9])[0-9]{1})/g) ? '(00) 00000-0000' : '(00) 0000-0000';
        };

        jQuery(".sp_celphones").mask(SaoPauloCelphoneMask, { onKeyPress: function(phone, e, currentField, options){
          jQuery(currentField).mask(SaoPauloCelphoneMask(phone), options);
        }});

      });



// jQuery(document).ready(function(){

//    var handleMatchMedia = function(mediaQuery) {
//       if (mediaQuery.matches) {
//         jQuery('.contactBlock__span').append('<br>');           
//        } else {
//         jQuery('.contactBlock br').css('display','none');
//        }
//    },
//    mql = window.matchMedia('all and (max-width: 780px)');
//    handleMatchMedia(mql);
//    mql.addListener(handleMatchMedia); 

// });


//       jQuery('.csColumn ').addClass('jscssColumn');
//       jQuery('.csRow ').removeClass('csColumn ');

//      window.addEventListener("orientationchange", function() {
//       jQuery(".menu_active").toggle();
//     }, false);


  /* Скрываем нотисы после отправленного удачного/неудачного сообщения */
    jQuery('.ctaFormTab__item').click(function(){
       jQuery('.wpcf7-not-valid-tip').hide();
       jQuery('.wpcf7-response-output').hide();
    });





     // Slider case

     // jQuery(document).ready(function(){
     //    jQuery('.slider-container .owl-carousel').owlCarousel({
     //        loop:true,
     //        nav:true,
     //        // padding:10,
     //        autoplay:false,
     //        responsive:{
     //            0:{
     //                items:1
     //            },
     //            600:{
     //                items:1
     //            },
     //            1000:{
     //                items:1
     //            }
     //        }
     //    })
     // });


     // jQuery(document).ready(function(){
     //    jQuery('#slider-testimonials .owl-carousel').owlCarousel({
     //        loop:true,
     //        nav:true,
     //        autoplay:false,
     //        responsive:{
     //            0:{
     //                items:1
     //            },
     //            600:{
     //                items:1
     //            },
     //            1000:{
     //                items:1
     //            }
     //        }
     //    })
     // });
     // jQuery(document).ready(function(){
     //    jQuery('#slider-afisha .owl-carousel').owlCarousel({
     //        loop:true,
     //        nav:true,
     //        autoplay:true,
     //        responsive:{
     //            0:{
     //                items:1
     //            },
     //            600:{
     //                items:2
     //            },
     //            1000:{
     //                items:3
     //            }
     //        }
     //    })
     // });    



/* Яндекс карта*/

ymaps.ready(function () {
var myMap = new ymaps.Map('map', {
center: [64.532286, 40.523189],
zoom: 15
}, {
searchControlProvider: 'yandex#search'
}),

// Создаём макет содержимого.
MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
'<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
),

myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
hintContent: '163000, набережная Северной Двины, 71/1 оф. 215 ',
balloonContent: '163000, набережная Северной Двины, 71/1 оф. 215 '
}, {
// Опции.
// Необходимо указать данный тип макета.
iconLayout: 'default#image',
// Своё изображение иконки метки.
iconImageHref: 'http://lawyer.io/wp-content/uploads/2018/04/pin.png',
// Размеры метки.
iconImageSize: [80, 60],
// Смещение левого верхнего угла иконки относительно
// её "ножки" (точки привязки).
iconImageOffset: [-5, -38]
}),

myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
hintContent: 'Собственный значок метки с контентом',
balloonContent: 'Тут название',
iconContent: '12'
}, {
// Опции.
// Необходимо указать данный тип макета.
iconLayout: 'default#imageWithContent',
// Своё изображение иконки метки.
iconImageHref: 'http://lawyer.io/wp-content/uploads/2018/04/pin.png',
// Размеры метки.
iconImageSize: [50, 100],
// Смещение левого верхнего угла иконки относительно
// её "ножки" (точки привязки).
iconImageOffset: [-24, -24],
// Смещение слоя с содержимым относительно слоя с картинкой.
iconContentOffset: [15, 15],
// Макет содержимого.
iconContentLayout: MyIconContentLayout
});

myMap.geoObjects
.add(myPlacemark)
.add(myPlacemarkWithContent);
});


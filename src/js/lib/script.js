var skrollrInstance;

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

function bindLightbox(){
  if(jQuery('.project-screenshot')){
    jQuery('.project-screenshot').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  }
}

function show_site_title(){
  jQuery(this).closest('div').find('p.site-title').css('bottom', '-3.5em');
}
function hide_site_title(){
  jQuery(this).closest('div').find('p.site-title').css('bottom', '0em');
}

function activate_home_offering(){
  jQuery(this).closest('div').find('img').css('top', '-10px');
}

function deactivate_home_offering(){
  jQuery(this).closest('div').find('img').css('top', '0px');
}

function bindFocusToSubmenu(){
  jQuery(this).closest('.sub-menu').addClass('is-active');
}

function bindBlurToSubmenu(){
  jQuery(this).closest('.sub-menu').removeClass('is-active');
}

function isotopeLogic(){
  jQuery('.blog-list').isotope({
    itemSelector: '.blog-item',
    layoutMode: 'fitRows'
  });
}

function filterBlogs(event) {
  event.preventDefault();

  jQuery('.blog-list').isotope({ filter: jQuery(this).data('filter') })
  jQuery('.blog-filter__list-item').removeClass('blog-filter__list-item--is-active');
  jQuery(this).addClass('blog-filter__list-item--is-active');
  if(skrollrInstance) {
    skrollrInstance.refresh()
  }
}

function setUpInfiniteScroll() {
  jQuery('.blog-list').infinitescroll({
    navSelector  : ".post-navigation",
    nextSelector : ".post-navigation .next",
    itemSelector : ".blog-item",
    loading: {
      finishedMsg: "That's it!",
      img: "/dist/images/loading-squares.gif",
      msgText: ""
    }
  }, function(newElements) {
    var $newElems = jQuery(newElements);
    // var $newElems = $(newElements).hide();
    // $newElems.fadeIn();
    jQuery('.blog-list').isotope('appended', $newElems);
    if(skrollrInstance) {
      skrollrInstance.refresh()
    }
  });
}

jQuery(document).ready( function()	{
  if(!navigator.userAgent.match(/MSIE 8/)){
    jQuery(".typed span").empty();
    jQuery(".typed span").typed({
      strings: [
        "Tea Enthusiast",
        "Longboarder",
        "Dad",
        "Developer"
      ],
      contentType: 'html',
      typeSpeed: 30,
    });
  }

  jQuery('.sub-menu').on('focus', 'a', bindFocusToSubmenu);
  jQuery('.sub-menu').on('blur', 'a', bindBlurToSubmenu);

  if(!isMobile.any() && !navigator.userAgent.match(/MSIE 8/)){
    skrollrInstance = skrollr.init();
  }else{
    if(jQuery('#about').length != 0){
      jQuery('#about').hide();
      jQuery('#about-responsive').show();
    }
  }

  if(jQuery('.header-content-wrapper').length > 0){
    if(jQuery('html').hasClass('ie8') || Modernizr.mq('screen and (min-width: 876px)')){
      jQuery('.sticky').removeClass('affixed');
      jQuery('.sticky').removeClass('mini');

      jQuery(window).on('scroll', function(){
        if(window.pageYOffset + 55 > parseInt(jQuery('.header-content-wrapper').css('height'))){
          jQuery('.sticky').addClass('affixed');
        }else{
          jQuery('.sticky').removeClass('affixed');
        }

        if(window.pageYOffset + 30 > parseInt(jQuery('.header-content-wrapper').css('height'))){
          jQuery('.sticky').addClass('mini');
        }else{
          jQuery('.sticky').removeClass('mini');
        }
      });

      jQuery('.home-offerings').find('a').hover(activate_home_offering, deactivate_home_offering);
      jQuery('.home-offerings').find('a').focus(activate_home_offering);
      jQuery('.home-offerings').find('a').blur(deactivate_home_offering);

      jQuery('a.project-hover').hover(show_site_title, hide_site_title);
      jQuery('a.project-hover').focus(show_site_title);
      jQuery('a.project-hover').blur(hide_site_title);

    }else{
      jQuery('.sticky').addClass('affixed');
      jQuery('.sticky').addClass('mini');
    }
  }

  bindLightbox();
  isotopeLogic();

  jQuery('.blog-filter__list-item').click(filterBlogs);

  setUpInfiniteScroll();
});

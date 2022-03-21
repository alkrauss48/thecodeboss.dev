jQuery(document).ready( function()	{

  jQuery('#responsive-menu-icon').sidr({
    name: 'sidr-main',
    source: '#navigation',
    side: 'right',
    onOpen:   function() { jQuery('#responsive-menu-icon').addClass('is-active'); },
    onClose:  function() { jQuery('#responsive-menu-icon').removeClass('is-active'); }
  });

  jQuery('body').on('click', function(event){
    if(jQuery('body').hasClass('sidr-open') && jQuery(event.target).parents('#sidr-main').length == 0){
      jQuery.sidr('close', 'sidr-main');
    }
  });

});

var closeSidr = function() {
  if(jQuery('body').hasClass('sidr-open')){
    jQuery.sidr('close', 'sidr-main');
  }
};

jQuery(window).touchwipe({
  wipeRight: closeSidr,
  preventDefaultEvents: false
});

jQuery(window).resize(closeSidr);

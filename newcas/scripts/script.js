jQuery(document).ready(function() {
  // rating
  if (jQuery('.rating').length > 0) {
    jQuery('.rating').each(function(){
      var rating_value = jQuery(this).data('rating') * 10;
      jQuery(this).find('.rating-overlay-a').css('width', rating_value + '%');
    })
  }
  // FAQ
  jQuery('.faq h3').click(function(){
    jQuery(this).next('div').slideToggle(100);
  });
  // Mobile Menu Hamburger
  jQuery('#m_menu_trigger').click(function() {
    jQuery(this).toggleClass('icon-delete');
    jQuery(this).toggleClass('icon-menu2');
    jQuery('#header').find('.m-menu').toggleClass('active');
    jQuery('body').toggleClass('over-hidden');
  });
  jQuery('.m-menu li.expanded').click(function() {
    jQuery(this).toggleClass('active');
    jQuery(this).find('ul.menu').slideToggle('fast');
  });
  jQuery('li.expanded span').click(function() {
    jQuery(this).toggleClass('active');
    jQuery(this).siblings('ul').toggleClass('active');
  });
  // Expanders
  jQuery('a[data-toggle="collapse"]').click(function() {
    var status = jQuery(this).attr('aria-expanded');
    switch (status) {
      case 'false':
        jQuery(this).find('span').addClass('icon-chevron-up');
        jQuery(this).find('span').removeClass('icon-chevron-down');
        break;
      case 'true':
        jQuery(this).find('span').removeClass('icon-chevron-up');
        jQuery(this).find('span').addClass('icon-chevron-down');
        break;
      default:

    }
  })
});

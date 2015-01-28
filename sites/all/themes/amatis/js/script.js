/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    // Place your code here.
    
    $('.block-user h2').html('Customer Login');
	$('input.node-add-to-cart').attr('value','Add to Order');
	$('.page-cart h1.title').html('My Quote');
	
	$('.not-logged-in .view-products .dealer-price').remove();
	$('.not-logged-in .view-products .map').remove();
	$('.not-logged-in .view-products .cartlink').remove();
	
	/*$('input.node-add-to-cart').attr('value','Add to Order');
	$('#uc-cart-checkout-form .collapsible').removeClass('collapsible');*/
	
    var submenu_down = false;
    
    $("#navigation .submenu").hide();
    $(".submenu").mouseout(function(){ 
	    $(".submenu").slideUp(300);
    });
    $("#navigation a#violins").hover(function() {
    	if(submenu_down){
    		$("#navigation .submenu").not("#block-menu-menu-violin-submenu").hide();
    		$("#navigation #block-menu-menu-violin-submenu").show();
    		$(this).addClass('active');
    	} else {
	    	$("#navigation .submenu").not("#block-menu-menu-violin-submenu").hide();
    		$("#navigation #block-menu-menu-violin-submenu").slideDown(300);
    		$(this).addClass('active');
    		submenu_down = true;
    	}
    });
    
    $("#navigation a#violas").hover(function() {
    	if(submenu_down){
    		$("#navigation .submenu").not("#block-menu-menu-viola-submenu").hide();
    		$("#navigation #block-menu-menu-viola-submenu").show();
    		$(this).addClass('active');
    	} else {
	    	$("#navigation .submenu").not("#block-menu-menu-viola-submenu").hide();
    		$("#navigation #block-menu-menu-viola-submenu").slideDown(300);
    		$(this).addClass('active');
    		submenu_down = true;
    	}
    });

  }
};


})(jQuery, Drupal, this, this.document);

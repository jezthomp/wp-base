jQuery(document).ready(function($) {
	
	
	 /*------------------------------------------------------------------*/	
		
		
		// ------- Start Mobile Navigtaion Toggle
			// Ref: http://tinyurl.com/zv59knp
						
						function mobileBits() {
						    $(".mobile-button").show();
						    $(".menu-primary").hide(); 
						}
						function desktopBits() {
						    $(".mobile-button").hide();
						    $(".menu-primary").show();
						}
						
						var mobileMenuToggle = function() {
								
								//vars
								var actualButton = this;
								var actualMenu = $('.menu-primary');
								
								
								$(".mobile-button").unbind('click').click(function(){	

									
										
										// Remove selected classes from other menus.
										$( '.mobile-button' ).not( actualButton ).removeClass( 'button-active' );
										$( '.menu-primary' ).not( actualMenu ).removeClass( 'menu-is-open' );
										
										// Toggle the selected classes for this menu.
										$( actualButton ).toggleClass( 'button-active' );
										$( actualMenu ).toggleClass( 'menu-is-open' );
										
										// Is the menu in an open state?
										var is_open = $( actualMenu ).hasClass( 'menu-is-open' );
								
										// If the menu is open and there wasn't a menu already open when clicking.
										if ( is_open ) {
								
											// Add a custom body class.
											$( 'body' ).addClass( 'menu-open' );
											$( 'html' ).addClass( 'menu-open' );
								
										// If we're closing the menu.
										} else if ( ! is_open ) {
								
											$( 'body' ).removeClass( 'menu-open' );
											$( 'html' ).removeClass( 'menu-open' );
		
										}
										
										
//										$(window).on("resize", function () {
//										
//											if ( is_open && $(window).width() < 750 ) {
//												mobileBits();
//												
//											} else if ( ! is_open && $(window).width() >= 750 ) {
//												desktopBits();
//											}				
//															
//										}).resize();				


								});	
								
								
//								function mobileBits() {
//								    $( actualButton ).show();
//								    $( actualMenu).hide(); 
//								}
//								function desktopBits() {
//								
//									
//								    $( actualButton ).hide();
//								    $( actualMenu ).show();
//								}
//								
								// Close menus when somewhere else in the document is clicked.
									$( document ).click( function() {
								
										$( 'body' ).removeClass( 'menu-open' );
										$( 'html' ).removeClass( 'menu-open' );
										$( '.mobile-button' ).removeClass( 'button-active' );
										$( '.menu-primary' ).removeClass( 'menu-is-open' );
									} );
								
								// Stop propagation if clicking inside of our main menu.
									$( '.site-header' ).on( 'click', function( e ) {
										e.stopPropagation();
									} );
							
						};
						
						
						
						
						//Run The Mobile Naviation Toggle
						mobileMenuToggle();
					
					
			// ------- End Mobile Navigtaion Toggle		
		
		 /*------------------------------------------------------------------*/		
	
	// SVG Detect
	
	if(!Modernizr.svg) {
	    $('img[src*="svg"]').attr('src', function() {
	        return $(this).attr('src').replace('.svg', '.png');
	    });
	}
	
	

	
	
});



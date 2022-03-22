$(document).ready(function(){

	// Global Variables

		var toggle_primary_button = $('.nav_toggle_button i'),
				toggle_primary_icon = $('.nav_toggle_button i'),
				toggle_secondary_button = $('nav li span'),
				toggle_secondary_icon = $('nav li span i'),
				primary_menu = $('nav'),
				secondary_menu = $('nav ul ul'),
				webHeight = $(document).height(),
				window_width = $(window).width();

	// Company name and phone number on content area
	$("main * :not('h1')").each(function() {
		var regex1 = /(?![^<]+>)((\+\d{1,2}[\s.-])?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{6})/g;
		var regex2 = /(?![^<]+>)((\+\d{1,2}[\s.-])?\(?\d{3}\)?[\s.-]?\d{4}[\s.-]?\d{4})/g;
		var regex = /(?![^<]+>)((\+\d{1,2}[\s.-])?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4})/g;
				$(this).html(
						$(this).html()
						.replace(/Big Beautiful Women/gi, "<span class='comp'>$&</span>")
						.replace(regex1, "<strong>$&</strong>").replace(regex2, "<strong>$&</strong>").replace(regex, "<strong>$&</strong>"));
		});

	//Multi-line Tab
	toggle_secondary_button.each(function(){
		$(this).click(function(){
			$(this).parent("li").children("ul").slideToggle();
			$(this).children().toggleClass("fa-caret-up").toggleClass("fa-caret-down");;
		});
	});

	// Basic functionality for nav_toggle_button
	$(toggle_primary_button).click(function(){
		primary_menu.slideToggle();
		toggle_primary_icon.toggleClass("fa-times").toggleClass("fa-navicon");
	});

	// Add class to tab having drop down
	$( "nav li:has(ul)").find('span i').addClass("fa-caret-down");

	// Reset all configs when width > 760
	$(window).resize(function(){

		if(window_width > 760 && primary_menu.is(':visible') || primary_menu.is(':hidden') || secondary_menu.is(':visible') || secondary_menu.is(':hidden')) {
			primary_menu.removeAttr('style');
			toggle_primary_icon.removeClass("fa-times").addClass("fa-navicon");

			// secondary_menu.removeAttr('style');
			// toggle_secondary_icon.removeClass("fa-caret-up").addClass("fa-caret-down");
		}

	});

	/* Current Pages <--Start-->*/

	/* add 'current_page_item' class on button with 'c_page' class */
	$(".c_page").filter(function(){
		return this.href == location.href.replace(/#.*/, "");
	}).addClass("current_page_item");

		/* add 'current_page_item class parent of button with 'cp_page' class */
	$(".cp_page").filter(function(){
		return this.href == location.href.replace(/#.*/, "");
	}).parent().addClass("current_page_item");

	/* remove/hide button with 'r_page' class */
	$(".r_page").filter(function(){
		return this.href == location.href.replace(/#.*/, "");
	}).hide();

	/* remove/hide parent of button with 'rp_page' class */
	$(".rp_page").filter(function(){
		return this.href == location.href.replace(/#.*/, "");
	}).parent().hide();

/* Current Pages <--End--> */

	$('.rslides').responsiveSlides();

	$('.back_top').click(function () { // back to top
		$("html, body").animate({
			scrollTop: 0
		}, 900);
		return false;
	});

	$(window).scroll(function(){  // fade in fade out button
	var windowScroll = $(this).scrollTop();

		if (windowScroll > (webHeight * 0.5) ) {
			$(".back_top").fadeIn();
		} else{
			$(".back_top").fadeOut()
		};

	});

	if(window_width <= 600){
		$(".hbot_left").before($("#nav_area"));
		} else{
		$(".hbot_right form").after($("#nav_area"));
	}

	$(window).resize(function(){
		var window_width = $(window).width();

		if(window_width <= 600){
		$(".hbot_left").before($("#nav_area"));
		} else{
		$(".hbot_right form").after($("#nav_area"));
		}
	});

});

$("#newsletterPopup").submit(function(e) {

    var ref = $(this).find("[required]");

    $(ref).each(function(){
        if ( $(this).val() == '' )
        {
            alert("Required field should not be blank.");
            $(this).focus();

            e.preventDefault();
            return false;
        }
    });  return true;
});

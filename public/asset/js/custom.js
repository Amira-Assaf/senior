/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Header Search
4. Init Menu
5. Init Home Slider
6. Init Courses Slider
7. Init Milestones
8. Init Accordions
9.	<!--Success Stories-->


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var menu = $('.menu');
	var menuActive = false;
	var header = $('.header');
	var burger = $('.hamburger');
	var ctrl = new ScrollMagic.Controller();

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initHeaderSearch();
	initMenu();
	initHomeSlider();
	initCoursesSlider();
	initMilestones();
	initAccordions();

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if($(window).scrollTop() > 100)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Header Search

	*/

	function initHeaderSearch()
	{
		if($('.search_button').length)
		{
			$('.search_button').on('click', function()
			{
				if($('.header_search_container').length)
				{
					$('.header_search_container').toggleClass('active');
				}
			});
		}
	}

	/* 

	4. Init Menu

	*/

	function initMenu()
	{
		if($('.menu').length)
		{
			var menu = $('.menu');
			if($('.hamburger').length)
			{
				burger.on('click', function()
				{
					if(menuActive)
					{
						closeMenu();
					}
					else
					{
						openMenu();

						$(document).one('click', function cls(e)
						{
							if($(e.target).hasClass('menu_mm'))
							{
								$(document).one('click', cls);
							}
							else
							{
								closeMenu();
							}
						});
					}
				});
			}
		}
	}

	function openMenu()
	{
		menu.addClass('active');
		menuActive = true;
	}

	function closeMenu()
	{
		menu.removeClass('active');
		menuActive = false;
	}

	/* 

	5. Init Home Slider

	*/

	function initHomeSlider()
	{
		if($('.home_slider').length)
		{
			var homeSlider = $('.home_slider');
			homeSlider.owlCarousel(
			{
				items:1,
				loop:true,
				autoplay:true,
				autoplayTimeout:8000,
				dots:false,
				nav:false,
				smartSpeed:1200
			});

			if($('.home_slider_prev').length)
			{
				var prev = $('.home_slider_prev');
				prev.on('click', function()
				{
					homeSlider.trigger('prev.owl.carousel');
				});
			}

			if($('.home_slider_next').length)
			{
				var next = $('.home_slider_next');
				next.on('click', function()
				{
					homeSlider.trigger('next.owl.carousel');
				});
			}
		}
	}

	/* 

	6. Init Courses Slider

	*/

	function initCoursesSlider()
	{
		if($('.courses_slider').length)
		{
			var coursesSlider = $('.courses_slider');
			coursesSlider.owlCarousel(
			{
				items:3,
				loop:true,
				autoplay:true,
				autoplayTimeout:8000,
				nav:false,
				dots:false,
				smartSpeed:1200,
				margin:30,
				responsive:
				{
					0:
					{
						items:1
					},
					768:
					{
						items:2
					},
					992:
					{
						items:3
					}
				}
			});

			if($('.courses_slider_prev').length)
			{
				var prev = $('.courses_slider_prev');
				prev.on('click', function()
				{
					coursesSlider.trigger('prev.owl.carousel');
				});
			}

			if($('.courses_slider_next').length)
			{
				var next = $('.courses_slider_next');
				next.on('click', function()
				{
					coursesSlider.trigger('next.owl.carousel');
				});
			}
		}
	}

	/* 

	7. Initialize Milestones

	*/

	function initMilestones()
	{
		if($('.milestone_counter').length)
		{
			var milestoneItems = $('.milestone_counter');

	    	milestoneItems.each(function(i)
	    	{
	    		var ele = $(this);
	    		var endValue = ele.data('end-value');
	    		var eleValue = ele.text();

	    		/* Use data-sign-before and data-sign-after to add signs
	    		infront or behind the counter number (+, k, etc) */
	    		var signBefore = "";
	    		var signAfter = "";

	    		if(ele.attr('data-sign-before'))
	    		{
	    			signBefore = ele.attr('data-sign-before');
	    		}

	    		if(ele.attr('data-sign-after'))
	    		{
	    			signAfter = ele.attr('data-sign-after');
	    		}

	    		var milestoneScene = new ScrollMagic.Scene({
		    		triggerElement: this,
		    		triggerHook: 'onEnter',
		    		reverse:false
		    	})
		    	.on('start', function()
		    	{
		    		var counter = {value:eleValue};
		    		var counterTween = TweenMax.to(counter, 4,
		    		{
		    			value: endValue,
		    			roundProps:"value", 
						ease: Circ.easeOut, 
						onUpdate:function()
						{
							document.getElementsByClassName('milestone_counter')[i].innerHTML = signBefore + counter.value + signAfter;
						}
		    		});
		    	})
			    .addTo(ctrl);
	    	});
		}
	}

	/* 

	8. Init Accordions

	*/

	function initAccordions()
	{
		if($('.accordion').length)
		{
			var accs = $('.accordion');

			accs.each(function()
			{
				var acc = $(this);

				if(acc.hasClass('active'))
				{
					var panel = $(acc.next());
					var panelH = panel.prop('scrollHeight') + "px";
					
					if(panel.css('max-height') == "0px")
					{
						panel.css('max-height', panel.prop('scrollHeight') + "px");
					}
					else
					{
						panel.css('max-height', "0px");
					} 
				}

				acc.on('click', function()
				{
					if(acc.hasClass('active'))
					{
						acc.removeClass('active');
						var panel = $(acc.next());
						var panelH = panel.prop('scrollHeight') + "px";
						
						if(panel.css('max-height') == "0px")
						{
							panel.css('max-height', panel.prop('scrollHeight') + "px");
						}
						else
						{
							panel.css('max-height', "0px");
						} 
					}
					else
					{
						acc.addClass('active');
						var panel = $(acc.next());
						var panelH = panel.prop('scrollHeight') + "px";
						
						if(panel.css('max-height') == "0px")
						{
							panel.css('max-height', panel.prop('scrollHeight') + "px");
						}
						else
						{
							panel.css('max-height', "0px");
						} 
					}
				});
			});
		}
	}

});

//<!--Success Stories-->
// vars
'use strict'
var testim = document.getElementById("testim"),
		testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
	testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
	testimLeftArrow = document.getElementById("left-arrow"),
	testimRightArrow = document.getElementById("right-arrow"),
	testimSpeed = 4500,
	currentSlide = 0,
	currentActive = 0,
	testimTimer,
		touchStartPos,
		touchEndPos,
		touchPosDiff,
		ignoreTouch = 30;
;

window.onload = function () {

	// Testim Script
	function playSlide(slide) {
		for (var k = 0; k < testimDots.length; k++) {
			testimContent[k].classList.remove("active");
			testimContent[k].classList.remove("inactive");
			testimDots[k].classList.remove("active");
		}

		if (slide < 0) {
			slide = currentSlide = testimContent.length - 1;
		}

		if (slide > testimContent.length - 1) {
			slide = currentSlide = 0;
		}

		if (currentActive != currentSlide) {
			testimContent[currentActive].classList.add("inactive");
		}
		testimContent[slide].classList.add("active");
		testimDots[slide].classList.add("active");

		currentActive = currentSlide;

		clearTimeout(testimTimer);
		testimTimer = setTimeout(function () {
			playSlide(currentSlide += 1);
		}, testimSpeed)
	}

	testimLeftArrow.addEventListener("click", function () {
		playSlide(currentSlide -= 1);
	})

	testimRightArrow.addEventListener("click", function () {
		playSlide(currentSlide += 1);
	})

	for (var l = 0; l < testimDots.length; l++) {
		testimDots[l].addEventListener("click", function () {
			playSlide(currentSlide = testimDots.indexOf(this));
		})
	}

	playSlide(currentSlide);

	// keyboard shortcuts
	document.addEventListener("keyup", function (e) {
		switch (e.keyCode) {
			case 37:
				testimLeftArrow.click();
				break;

			case 39:
				testimRightArrow.click();
				break;

			case 39:
				testimRightArrow.click();
				break;

			default:
				break;
		}
	})

	testim.addEventListener("touchstart", function (e) {
		touchStartPos = e.changedTouches[0].clientX;
	})

	testim.addEventListener("touchend", function (e) {
		touchEndPos = e.changedTouches[0].clientX;

		touchPosDiff = touchStartPos - touchEndPos;

		console.log(touchPosDiff);
		console.log(touchStartPos);
		console.log(touchEndPos);


		if (touchPosDiff > 0 + ignoreTouch) {
			testimLeftArrow.click();
		} else if (touchPosDiff < 0 - ignoreTouch) {
			testimRightArrow.click();
		} else {
			return;
		}

	})
}
//<!--/Success Stories-->

//<!-- Schedule Tabs -->

			jQuery(document).ready(function ($) {

				// For Home Page
				let i = 2;
				var radius = 200;
				var fields = $('.itemDot');
				var container = $('.dotCircle');
				var width = container.width();
				radius = width / 2.5;

				var height = container.height();
				var angle = 0, step = (2 * Math.PI) / fields.length;
				fields.each(function () {
					var x = Math.round(width / 2 + radius * Math.cos(angle) - $(this).width() / 2);
					var y = Math.round(height / 2 + radius * Math.sin(angle) - $(this).height() / 2);

					$(this).css({
						left: x + 'px',
						top: y + 'px'
					});
					angle += step;
				});

				$('.itemDot').click(function () {
					var dataTab = $(this).data("tab");
					$('.itemDot').removeClass('active');
					$(this).addClass('active');
					$('.CirItem').removeClass('active');
					$('.CirItem' + dataTab).addClass('active');

					i = dataTab;

					$('.dotCircle').css({
						"transform": "rotate(" + (360 - (i - 1) * 36) + "deg)",
						"transition": "2s"
					});
					$('.itemDot').css({
						"transform": "rotate(" + ((i - 1) * 36) + "deg)",
						"transition": "1s"
					});
				});

				setInterval(function () {
					var dataTab = $('.itemDot.active').data("tab");
					if (dataTab > 5 || i > 5) {
						dataTab = 1;
						i = 1;
					}
					$('.itemDot').removeClass('active');
					$('[data-tab="' + i + '"]').addClass('active');
					$('.CirItem').removeClass('active');
					$('.CirItem' + i).addClass('active');
					i++;

					$('.dotCircle').css({
						"transform": "rotate(" + (360 - (i - 2) * 36) + "deg)",
						"transition": "2s"
					});
					$('.itemDot').css({
						"transform": "rotate(" + ((i - 2) * 36) + "deg)",
						"transition": "1s"
					});
				}, 5000);
			});
//<!-- /Schedule Tabs -->

//<!--Reviews-->

		// for animation

		$(document).ready(function () {
			$('.pp-quote').click(function () {
				$('.pp-quote').removeClass("active");
				$(this).addClass("active");
			});
		});

$(document).ready(function () {

	// hide-top

	$('.li-quote-1').click(function (e) {
		e.stopPropagation();
		$(".show").addClass('hide-top');
		$(".hide-top").removeClass('show');
		$('.quote-text-1').addClass('show');
		$('.quote-text-1').removeClass('hide-bottom');
	});

	$('.li-quote-2').click(function (e) {
		e.stopPropagation();
		$(".show").addClass('hide-top');
		$(".hide-top").removeClass('show');
		$('.quote-text-2').addClass('show');
		$('.quote-text-2').removeClass('hide-bottom');
	});

	$('.li-quote-3').click(function (e) {
		e.stopPropagation();
		$(".show").addClass('hide-top');
		$(".hide-top").removeClass('show');
		$('.quote-text-3').addClass('show');
		$('.quote-text-3').removeClass('hide-bottom');
	});
	$('.li-quote-4').click(function (e) {
		e.stopPropagation();
		$(".show").addClass('hide-top');
		$(".hide-top").removeClass('show');
		$('.quote-text-4').addClass('show');
		$('.quote-text-4').removeClass('hide-bottom');
	});
	$('.li-quote-5').click(function (e) {
		e.stopPropagation();
		$(".show").addClass('hide-top');
		$(".hide-top").removeClass('show');
		$('.quote-text-5').addClass('show');
		$('.quote-text-5').removeClass('hide-bottom');
	});
	$('.li-quote-6').click(function (e) {
		e.stopPropagation();
		$(".show").addClass('hide-top');
		$(".hide-top").removeClass('show');
		$('.quote-text-6').addClass('show');
		$('.quote-text-6').removeClass('hide-bottom');
	});
	$('.li-quote-7').click(function (e) {
		e.stopPropagation();
		$(".show").addClass('hide-top');
		$(".hide-top").removeClass('show');
		$('.quote-text-7').addClass('show');
		$('.quote-text-7').removeClass('hide-bottom');
	});
	$('.li-quote-8').click(function (e) {
		e.stopPropagation();
		$(".show").addClass('hide-top');
		$(".hide-top").removeClass('show');
		$('.quote-text-8').addClass('show');
		$('.quote-text-8').removeClass('hide-bottom');
	});


});


$(document).ready(function () {

	// hide-top

	$('.li-quote-1').click(function (e) {
		e.stopPropagation();
		$(".look").addClass('hide-dp-top');
		$(".hide-dp-top").removeClass('look');
		$('.dp-name-1').addClass('look');
		$('.dp-name-1').removeClass('hide-dp-bottom');
	});

	$('.li-quote-2').click(function (e) {
		e.stopPropagation();
		$(".look").addClass('hide-dp-top');
		$(".hide-dp-top").removeClass('look');
		$('.dp-name-2').addClass('look');
		$('.dp-name-2').removeClass('hide-dp-bottom');
	});

	$('.li-quote-3').click(function (e) {
		e.stopPropagation();
		$(".look").addClass('hide-dp-top');
		$(".hide-dp-top").removeClass('look');
		$('.dp-name-3').addClass('look');
		$('.dp-name-3').removeClass('hide-dp-bottom');
	});
	$('.li-quote-4').click(function (e) {
		e.stopPropagation();
		$(".look").addClass('hide-dp-top');
		$(".hide-dp-top").removeClass('look');
		$('.dp-name-4').addClass('look');
		$('.dp-name-4').removeClass('hide-dp-bottom');
	});

	$('.li-quote-5').click(function (e) {
		e.stopPropagation();
		$(".look").addClass('hide-dp-top');
		$(".hide-dp-top").removeClass('look');
		$('.dp-name-5').addClass('look');
		$('.dp-name-5').removeClass('hide-dp-bottom');
	});

	$('.li-quote-6').click(function (e) {
		e.stopPropagation();
		$(".look").addClass('hide-dp-top');
		$(".hide-dp-top").removeClass('look');
		$('.dp-name-6').addClass('look');
		$('.dp-name-6').removeClass('hide-dp-bottom');
	});
	$('.li-quote-7').click(function (e) {
		e.stopPropagation();
		$(".look").addClass('hide-dp-top');
		$(".hide-dp-top").removeClass('look');
		$('.dp-name-7').addClass('look');
		$('.dp-name-7').removeClass('hide-dp-bottom');
	});
	$('.li-quote-8').click(function (e) {
		e.stopPropagation();
		$(".look").addClass('hide-dp-top');
		$(".hide-dp-top").removeClass('look');
		$('.dp-name-8').addClass('look');
		$('.dp-name-8').removeClass('hide-dp-bottom');
	});


});
//<!--Reviews-->

//Comments & Reply

function submit_comment() {
	var comment = $('.commentar').val();
	el = document.createElement('li');
	el.className = "box_result row";
	el.innerHTML =
		  '<div class=\"avatar_comment col-md-1\">' +
			'<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>' +
		  '</div>' +
		  '<div class=\"result_comment col-md-11\">' +
		  '<h4>Anonimous</h4>' +
		  '<p>' + comment + '</p>' +
		  '<div class=\"tools_comment\">' +
		  '<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> � </span>' +
		  '<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>' +
		  '<span aria-hidden=\"true\"> � </span>' +
		  '<a class=\"replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> � </span>' +
			  '<span>1m</span>' +
		  '</div>' +
		  '<ul class="child_replay"></ul>' +
		  '</div>';
	document.getElementById('list_comment').prepend(el);
	$('.commentar').val('');
}

$(document).ready(function () {
	$('#list_comment').on('click', '.like', function (e) {
		$current = $(this);
		var x = $current.closest('div').find('.like').text().trim();
		var y = parseInt($current.closest('div').find('.count').text().trim());

		if (x === "Like") {
			$current.closest('div').find('.like').text('Unlike');
			$current.closest('div').find('.count').text(y + 1);
		} else if (x === "Unlike") {
			$current.closest('div').find('.like').text('Like');
			$current.closest('div').find('.count').text(y - 1);
		} else {
			var replay = $current.closest('div').find('.like').text('Like');
			$current.closest('div').find('.count').text(y - 1);
		}
	});

	$('#list_comment').on('click', '.replay', function (e) {
		cancel_reply();
		$current = $(this);
		el = document.createElement('li');
		el.className = "box_reply row";
		el.innerHTML =
			'<div class=\"col-md-12 reply_comment\">' +
				'<div class=\"row\">' +
					'<div class=\"avatar_comment col-md-1\">' +
					  '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>' +
					'</div>' +
					'<div class=\"box_comment col-md-10\">' +
					  '<textarea class=\"comment_replay\" placeholder=\"Add a comment...\"></textarea>' +
					  '<div class=\"box_post\">' +
						'<div class=\"pull-right\">' +
						  '<span>' +
							'<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\" />' +
							'<i class=\"fa fa-caret-down\"></i>' +
						  '</span>' +
						  '<button class=\"cancel\" onclick=\"cancel_reply()\" type=\"button\">Cancel</button>' +
						  '<button onclick=\"submit_reply()\" type=\"button\" value=\"1\">Reply</button>' +
						'</div>' +
					  '</div>' +
					'</div>' +
				'</div>' +
			'</div>';
		$current.closest('li').find('.child_replay').prepend(el);
	});
});

function submit_reply() {
	var comment_replay = $('.comment_replay').val();
	el = document.createElement('li');
	el.className = "box_reply row";
	el.innerHTML =
		  '<div class=\"avatar_comment col-md-1\">' +
			'<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>' +
		  '</div>' +
		  '<div class=\"result_comment col-md-11\">' +
		  '<h4>Anonimous</h4>' +
		  '<p>' + comment_replay + '</p>' +
		  '<div class=\"tools_comment\">' +
		  '<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> � </span>' +
		  '<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>' +
		  '<span aria-hidden=\"true\"> � </span>' +
		  '<a class=\"replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> � </span>' +
			  '<span>1m</span>' +
		  '</div>' +
		  '<ul class="child_replay"></ul>' +
		  '</div>';
	$current.closest('li').find('.child_replay').prepend(el);
	$('.comment_replay').val('');
	cancel_reply();
}

function cancel_reply() {
	$('.reply_comment').remove();
}
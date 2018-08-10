jQuery(function(jQuery){
	'use strict';

	// -------------------------------------------------------------
	//   Basic Navigation
	// -------------------------------------------------------------
	(function () {
		var jQueryframe  = jQuery('#basic');
		var jQueryslidee = jQueryframe.children('ul').eq(0);
		var jQuerywrap   = jQueryframe.parent();

		// Call Sly on frame
		jQueryframe.sly({
			horizontal: 1,
			itemNav: 'basic',
			smart: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 3,
			scrollBar: jQuerywrap.find('.scrollbar'),
			scrollBy: 1,
			pagesBar: jQuerywrap.find('.pages'),
			activatePageOn: 'click',
			speed: 300,
			elasticBounds: 1,
			easing: 'easeOutExpo',
			dragHandle:1,
			dynamicHandle: 1,
			clickBar: 1,

			// Buttons
			forward: jQuerywrap.find('.forward'),
			backward: jQuerywrap.find('.backward'),
			prev: jQuerywrap.find('.prev'),
			next: jQuerywrap.find('.next'),
			prevPage: jQuerywrap.find('.prevPage'),
			nextPage: jQuerywrap.find('.nextPage')
		});

		// To Start button
		jQuerywrap.find('.toStart').on('click', function () {
			var item = jQuery(this).data('item');
			// Animate a particular item to the start of the frame.
			// If no item is provided, the whole content will be animated.
			jQueryframe.sly('toStart', item);
		});

		// To Center button
		jQuerywrap.find('.toCenter').on('click', function () {
			var item = jQuery(this).data('item');
			// Animate a particular item to the center of the frame.
			// If no item is provided, the whole content will be animated.
			jQueryframe.sly('toCenter', item);
		});

		// To End button
		jQuerywrap.find('.toEnd').on('click', function () {
			var item = jQuery(this).data('item');
			// Animate a particular item to the end of the frame.
			// If no item is provided, the whole content will be animated.
			jQueryframe.sly('toEnd', item);
		});

		// Add item
		jQuerywrap.find('.add').on('click', function () {
			jQueryframe.sly('add', '<li>' + jQueryslidee.children().length + '</li>');
		});

		// Remove item
		jQuerywrap.find('.remove').on('click', function () {
			jQueryframe.sly('remove', -1);
		});
	}());

	// -------------------------------------------------------------
	//   Centered Navigation
	// -------------------------------------------------------------
	(function () {
		var jQueryframe = jQuery('#centered');
		var jQuerywrap  = jQueryframe.parent();

		// Call Sly on frame
		jQueryframe.sly({
			horizontal: 1,
			itemNav: 'centered',
			smart: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 4,
			scrollBar: jQuerywrap.find('.scrollbar'),
			scrollBy: 1,
			speed: 300,
			elasticBounds: 1,
			easing: 'easeOutExpo',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Buttons
			prev: jQuerywrap.find('.prev'),
			next: jQuerywrap.find('.next')
		});
	}());

	// -------------------------------------------------------------
	//   Force Centered Navigation
	// -------------------------------------------------------------
	(function () {
		var jQueryframe = jQuery('#forcecentered');
		var jQuerywrap  = jQueryframe.parent();

		// Call Sly on frame
		jQueryframe.sly({
			horizontal: 1,
			itemNav: 'forceCentered',
			smart: 1,
			activateMiddle: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 0,
			scrollBar: jQuerywrap.find('.scrollbar'),
			scrollBy: 1,
			speed: 300,
			elasticBounds: 1,
			easing: 'easeOutExpo',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Buttons
			prev: jQuerywrap.find('.prev'),
			next: jQuerywrap.find('.next')
		});
	}());

	// -------------------------------------------------------------
	//   Cycle By Items
	// -------------------------------------------------------------
	(function () {
		var jQueryframe = jQuery('#cycleitems');
		var jQuerywrap  = jQueryframe.parent();

		// Call Sly on frame
		jQueryframe.sly({
			horizontal: 1,
			itemNav: 'basic',
			smart: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 0,
			scrollBar: jQuerywrap.find('.scrollbar'),
			scrollBy: 1,
			speed: 300,
			elasticBounds: 1,
			easing: 'easeOutExpo',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Cycling
			cycleBy: 'items',
			cycleInterval: 1000,
			pauseOnHover: 1,

			// Buttons
			prev: jQuerywrap.find('.prev'),
			next: jQuerywrap.find('.next')
		});

		// Pause button
		jQuerywrap.find('.pause').on('click', function () {
			jQueryframe.sly('pause');
		});

		// Resume button
		jQuerywrap.find('.resume').on('click', function () {
			jQueryframe.sly('resume');
		});

		// Toggle button
		jQuerywrap.find('.toggle').on('click', function () {
			jQueryframe.sly('toggle');
		});
	}());

	// -------------------------------------------------------------
	//   Cycle By Pages
	// -------------------------------------------------------------
	(function () {
		var jQueryframe = jQuery('#cyclepages');
		var jQuerywrap  = jQueryframe.parent();

		// Call Sly on frame
		jQueryframe.sly({
			horizontal: 1,
			itemNav: 'basic',
			smart: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 0,
			scrollBar: jQuerywrap.find('.scrollbar'),
			scrollBy: 1,
			pagesBar: jQuerywrap.find('.pages'),
			activatePageOn: 'click',
			speed: 300,
			elasticBounds: 1,
			easing: 'easeOutExpo',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Cycling
			cycleBy: 'pages',
			cycleInterval: 1000,
			pauseOnHover: 1,
			startPaused: 1,

			// Buttons
			prevPage: jQuerywrap.find('.prevPage'),
			nextPage: jQuerywrap.find('.nextPage')
		});

		// Pause button
		jQuerywrap.find('.pause').on('click', function () {
			jQueryframe.sly('pause');
		});

		// Resume button
		jQuerywrap.find('.resume').on('click', function () {
			jQueryframe.sly('resume');
		});

		// Toggle button
		jQuerywrap.find('.toggle').on('click', function () {
			jQueryframe.sly('toggle');
		});
	}());

	// -------------------------------------------------------------
	//   One Item Per Frame
	// -------------------------------------------------------------
	(function () {
		var jQueryframe = jQuery('#oneperframe');
		var jQuerywrap  = jQueryframe.parent();

		// Call Sly on frame
		jQueryframe.sly({
			horizontal: 1,
			itemNav: 'forceCentered',
			smart: 1,
			activateMiddle: 1,
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 0,
			scrollBar: jQuerywrap.find('.scrollbar'),
			scrollBy: 1,
			speed: 300,
			elasticBounds: 1,
			easing: 'easeOutExpo',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Buttons
			prev: jQuerywrap.find('.prev'),
			next: jQuerywrap.find('.next')
		});
	}());

	// -------------------------------------------------------------
	//   Crazy
	// -------------------------------------------------------------
	(function () {
		var jQueryframe  = jQuery('#crazy');
		var jQueryslidee = jQueryframe.children('ul').eq(0);
		var jQuerywrap   = jQueryframe.parent();

		// Call Sly on frame
		jQueryframe.sly({
			horizontal: 1,
			itemNav: 'basic',
			smart: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 3,
			scrollBar: jQuerywrap.find('.scrollbar'),
			scrollBy: 1,
			pagesBar: jQuerywrap.find('.pages'),
			activatePageOn: 'click',
			speed: 300,
			elasticBounds: 1,
			easing: 'easeOutExpo',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Buttons
			forward: jQuerywrap.find('.forward'),
			backward: jQuerywrap.find('.backward'),
			prev: jQuerywrap.find('.prev'),
			next: jQuerywrap.find('.next'),
			prevPage: jQuerywrap.find('.prevPage'),
			nextPage: jQuerywrap.find('.nextPage')
		});

		// To Start button
		jQuerywrap.find('.toStart').on('click', function () {
			var item = jQuery(this).data('item');
			// Animate a particular item to the start of the frame.
			// If no item is provided, the whole content will be animated.
			jQueryframe.sly('toStart', item);
		});

		// To Center button
		jQuerywrap.find('.toCenter').on('click', function () {
			var item = jQuery(this).data('item');
			// Animate a particular item to the center of the frame.
			// If no item is provided, the whole content will be animated.
			jQueryframe.sly('toCenter', item);
		});

		// To End button
		jQuerywrap.find('.toEnd').on('click', function () {
			var item = jQuery(this).data('item');
			// Animate a particular item to the end of the frame.
			// If no item is provided, the whole content will be animated.
			jQueryframe.sly('toEnd', item);
		});

		// Add item
		jQuerywrap.find('.add').on('click', function () {
			jQueryframe.sly('add', '<li>' + jQueryslidee.children().length + '</li>');
		});

		// Remove item
		jQuerywrap.find('.remove').on('click', function () {
			jQueryframe.sly('remove', -1);
		});
	}());
});
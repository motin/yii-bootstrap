/*!
 * Bootstrap Twipsy jQuery plugin file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright  Copyright &copy; Christoffer Niska 2011-
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @see http://twitter.github.com/bootstrap
 */

(function($) {

	/**
	 * Plugin default settings.
	 * @type Object
	 */
	var defaults = {
		placement: 'above',
		inEvent: 'mouseenter',
		outEvent: 'mouseleave',
		live: false
	};

	/**
	 * Private plugin methods.
	 * @type Object
	 */
	var methods = {
		/**
		 * Initializes the plugin.
		 * @param {Object} options The plugin options
		 * - placement: The placement of the tooltip, valid options are: 'above', 'right', 'below' and 'left'.
		 */
		init: function( options ) {
			var settings = $.extend( defaults, options || {} );
			var twipsy = methods.createTwipsy(settings.placement);
			return this.each(function() {
				var element = $(this),
					title = element.attr( 'title' );
				
				if ( title && title.length > 0 ) {
					element.removeAttr( 'title' ); // Remove the title to prevent it being displayed
					element.data( 'twipsy', {
						twipsy: twipsy,
						text: title,
						placement: settings.placement,
						visible: false
					});

					var fn = settings.live ? 'live' : 'bind';

					element.fn( settings.inEvent, function( event ) {
						methods.show(element);
					});

					element.fn( settings.outEvent, function( event ) {
						methods.hide(element);
					});
				}
			});
		},
		/**
		 * Creates the twipsy element.
		 * We only need to create one because we re-use it over and over.
		 * @param {String} placement The placement for the tooltip.
		 */
		createTwipsy: function(placement) {
			var twipsy = $( '<div class="twipsy ' + placement + '">' )
					.appendTo( 'body' )
					.hide();

			$( '<div class="twipsy-arrow">' )
					.appendTo( twipsy );

			$( '<div class="twipsy-inner">' )
					.appendTo( twipsy );

			return twipsy;
		},
		/**
		 * Shows the tooltip.
		 * @param {Object} element The owner of the plugin.
		 */
		show: function(element) {
			var data = element.data( 'twipsy' );

			if (!data.visible) {
				var twipsy = data.twipsy;

				twipsy.find( '.twipsy-inner' ).html( data.text );
				var position = methods._getPosition( element );
				twipsy.css( { top: position.top, left: position.left } )
						.show(); // todo: implement support for effects.

				element.data( 'twipsy', {
					twipsy: twipsy,
					text: data.text,
					placement: data.placement,
					visible: true
				});
			}
		},
		/**
		 * Hides the tooltip.
		 * @param {Object} element The owner of the plugin.
		 */
		hide: function( element ) {
			var data = element.data( 'twipsy' );

			if ( data.visible ) {
				data.twipsy.hide(); // todo: implement support for effects.

				element.data( 'twipsy', {
					twipsy: data.twipsy,
					text: data.text,
					placement: data.placement,
					visible: false
				});
			}
		},
		/**
		 * Returns the offset for this tooltip.
		 * @param {Object} element The owner of the plugin.
		 * @returns Object tooltip the offset.
		 */
		_getPosition: function( element ) {
			var data = element.data( 'twipsy' );
			var offset = element.offset(),
				top = 0, left = 0;

			switch (data.placement) {
				case 'above':
					top = offset.top - data.twipsy.outerHeight(),
					left = offset.left + ( ( element.outerWidth() - data.twipsy.outerWidth() ) / 2 );
					break;

				case 'right':
					top = offset.top + ( ( element.outerHeight() - data.twipsy.outerHeight() ) / 2 );
					left = offset.left + element.outerWidth();
					break;

				case 'below':
					top = offset.top + element.outerHeight(),
					left = offset.left + ( ( element.outerWidth() - data.twipsy.outerWidth() ) / 2 );
					break;

				case 'left':
					top = offset.top + ( ( element.outerHeight() - data.twipsy.outerHeight() ) / 2 );
					left = offset.left - data.twipsy.outerWidth();
					break;
			}

			return { left: left, top: top };
		},
		/**
		 * Destructs the plugin.
		 * Frees up all storage used and unbinds the events.
		 */
		destroy: function() {
			var element = $( this ),
				data = element.data( 'twipsy' ),
				window = $( window );

			return this.each(function() {
				window.unbind( '.twipsy' );
				data.twipsy.remove();
				element.removeData( 'twipsy' );
			});
		}
	};

	/**
	 * Bootstrap Twipsy jQuery plugin.
	 * @param method The method to call.
	 */
	$.fn.boottwipsy = function( method ) {
		if ( methods[ method ] ) {
			return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === 'object' || ! method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( 'Method ' +  method + ' does not exist on jQuery.bootstraptwipsy.' );
		}
	};

})(jQuery);
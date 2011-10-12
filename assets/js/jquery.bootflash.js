/*!
 * Bootstrap Flash jQuery plugin file.
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
		displayTime: 5000,
		fadeOutTime: 350
	};

	/**
	 * Private plugin methods.
	 * @type Object
	 */
	var methods = {
		/**
		 * Initializes the plugin.
		 * @param {Object} options The plugin options
		 * - displayTime: The time the alert is displayed.
		 * - fadeOutTime: The fade out time for the alert when it is closed.
		 */
		init: function( options ) {
			var settings = $.extend( defaults, options || {} );
			return this.each(function() {
				var element = $( this );
				var alerts = element.children();

				for ( var i = 0, l = alerts.length; i < l; i++ ) {
					var alert = $( alerts[ i ] );

					$( '<a class="close" href="#">x</a>' )
							.click( function( e ) {
								methods.close( alert, settings.fadeOutTime );
								e.preventDefault();
								return false;
							}).prependTo( alert.children() );

					if ( settings.fadeOutTime > 0 ) {
						setTimeout( function() {
							methods.close( alert, settings.fadeOutTime );
						}, settings.displayTime );
					}
				}
			});
		},
		/**
		 * Closes a specific alert.
		 * @param {Object} element The alert element.
		 * @param {Number} fadeTime The fade out time.
		 */
		close: function( element, fadeTime ) {
			element.fadeOut( fadeTime, function() {
				$( this ).html( '' );
			});
		},
		/**
		 * Destructs the plugin.
		 * Frees up all storage used and unbinds the events.
		 */
		destroy: function() {
			// Nothing here for now...
		}
	};

	/**
	 * Bootstrap Flash jQuery plugin.
	 * @param method The method to call.
	 */
	$.fn.bootflash = function( method ) {
		if ( methods[ method ] ) {
			return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === 'object' || ! method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( 'Method ' +  method + ' does not exist on jQuery.bootflash.' );
		}
	};

})(jQuery);
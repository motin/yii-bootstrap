/*!
 * Bootstrap Alert jQuery UI widget file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright  Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @see http://twitter.github.com/bootstrap
 */

( function( $ ) {
	"use strict" // set strict mode

	var widget = $.extend( {}, $.ui.bootWidget.prototype, {
		/**
		 * The name of the widget.
		 * @type String
		 */
		name: 'alert',
		/**
		 * Widget options.
		 * @type Object
		 */
		options: {
			keys: [ 'success', 'info', 'warning', 'error' ],
			template: '<div class="alert-message {key}"><p>{message}</p></div>',
			displayTime: 5000,
			fadeOutTime: 350
		},
		/**
		 * Creates the widget.
		 */
		_create: function() {
			var alerts = this.element.find( '.alert-message' );

			for ( var i = 0, l = alerts.length; i < l; ++i ) {
				var alert = $( alerts[ i ] );
				this._appendCloseLink( alert );
			}
		},
		/**
		 * Creates a new alert message.
		 * @param {String} key The message type, e.g. 'success'.
		 * @param {String} message The message.
		 */
		alert: function( key, message ) {
			if ( this.options.keys.indexOf( key ) !== -1 ) {
				var template = this.options.template;
				template = template.replace( '{key}', key );
				template = template.replace( '{message}', message );

				var alert = $( template )
					.appendTo( this.element );

				this._appendCloseLink( alert );
			}

			return this;
		},
		/**
		 * Closes the alert.
		 * @param {HTMLElement} alert The alert element.
		 */
		close: function( alert ) {
			alert.fadeOut( this.options.fadeTime, function() {
				alert.html( '' );
			});

			return this;
		},
		/**
		 * Creates the close link for a specific alert message.
		 * @param {HTMLElement} alert The alert element.
		 */
		_appendCloseLink: function( alert ) {
			var self = this;

			$( '<a class="close" href="#">x</a>' )
				.bind( 'click', function( event ) {
					self.close( alert, self.options.fadeOutTime );
					event.preventDefault();
					return false;
				} ).prependTo( self.element.children() );

			if ( self.options.fadeOutTime > 0 ) {
				setTimeout( function() {
					self.close( alert, self.options.fadeOutTime );
				}, self.options.displayTime );
			}
		},
		/**
		 * Destructs this widget.
		 */
		_destroy: function() {
			// Nothing here yet...
		}
	} );

	/**
	 * BootAlert jQuery UI widget.
	 */
	$.widget( 'ui.bootAlert', widget );

} )( jQuery );
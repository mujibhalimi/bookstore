/**
 * @author Will Steinmetz
 * 
 * jQuery notification plug-in inspired by the notification style of Windows 8
 * 
 * Copyright (c)2013, Will Steinmetz
 * Licensed under the BSD license.
 * http://opensource.org/licenses/BSD-3-Clause
 */
;(function($) {
	var settings = {
		life: 10000,
		zindex: 1100
	};
	
	var methods = {
		init: function(message, options) {
			return this.each(function() {
				var $this = $(this),
					data = $this.data('notific8');
					
                $this.data('notific8', {
                    target: $this,
                    settings: {},
                    message: ""
                });
                data = $this.data('notific8');
				data.message = message;
				
				// apply the options
				$.extend(data.settings, settings, options);
				
				// add the notification to the stack
				methods._buildNotification($this);
			});
		},
		
        /**
         * Destroy the notification
         */
		destroy: function($this) {
			var data = $this.data('notific8');
			
			$(window).unbind('.notific8');
			$this.removeData('notific8');
		},
		
		/**
		 * Build the notification and add it to the screen's stack
		 */
		_buildNotification: function($this) {
			var data = $this.data('notific8'),
				notification = $('<div />'),
				num = Number($('body').attr('data-notific8s'));
            num++;
			
			notification.addClass('jquery-notific8-notification').addClass(data.settings.theme);
			notification.attr('id', 'jquery-notific8-notification-' + num);
			$('body').attr('data-notific8s', num);
			
			// check for a heading
			if (data.settings.hasOwnProperty('heading') && (typeof data.settings.heading == "string")) {
				notification.append($('<div />').addClass('jquery-notific8-heading').html(data.settings.heading));
			}

            // otherwise, put the normal close button up that is only display
            // when the notification is hovered over
            else {
                var close = $('<div />').addClass('jquery-notific8-close').append(
                    $('<span />').html('X')
                );
                close.click(function(event) {
                    notification.animate({width: 'hide'}, {
                        duration: 'fast',
                        complete: function() {
                            notification.remove();
                        }
                    });
                });
                notification.append(close);
            }
			
			// add the message
			notification.append($('<div />').addClass('jquery-notific8-message').html(data.message));
	// plugin setup
	$.fn.notific8 = function(message, options) {
        if (typeof message == "string") {
            return methods.init.apply(this, arguments);
        } else {
            $.error('jQuery.notific8 takes a string message as the first parameter');
        }
	};
})(jQuery);

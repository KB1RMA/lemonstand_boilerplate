/**
 * Anonymous function for scoping variables 
 */

(function(window, undefined) {

  /**
	 * Prepare variables for use in scope
	 */

	var $ = window.jQuery;

	/**
	 * Init function to initialize events and such required on the page
	 */

	function init() {

  	
    /**
  	 * Take placeholders in HTML5 form elements and convert if 
  	 * placeholder attribute isn't supported
  	 */
  
  	if(!Modernizr.input.placeholder) {
  		$('[placeholder]').focus(function() {
  			var input = $(this);
  			if (input.val() == input.attr('placeholder')) {
    			input.val('');
    			input.removeClass('placeholder');
  			}
  		}).blur(function() {
  			var input = $(this);
  			if (input.val() == '' || input.val() == input.attr('placeholder')) {
    			input.addClass('placeholder');
    			input.val(input.attr('placeholder'));
  			}
  		}).blur();
  		$('[placeholder]').parents('form').submit(function() {
  			$(this).find('[placeholder]').each(function() {
    			var input = $(this);
    			if (input.val() == input.attr('placeholder'))
    				input.val('');
  			})
  		});
  	}

	}


	/**
	 * Document on ready
	 */

	$(function() {
		
		init();

	});

	
})(window); // End of scoped JS

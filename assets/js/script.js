/**
 * JavaScript file for Inspirational Quote Plugin.
 *
 * @package InspirationalQuote
 */

document.addEventListener(
	"DOMContentLoaded",
	function () {
		const button    = document.getElementById( "new-quote" );
		const container = document.getElementById( "quote-container" );

		if (button && container) {
			button.addEventListener(
				"click",
				function () {
					fetch( iq_ajax.ajaxurl + "?action=get_quote" )
					.then( response => response.json() )
					.then(
						data => {
							container.textContent = data.quote;
						}
					)
					.catch( error => console.error( "Error:", error ) );
				}
			);
		}
	}
);

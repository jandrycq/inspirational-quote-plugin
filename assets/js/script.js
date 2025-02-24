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
							if (data.success) {
								container.textContent = data.quote;
							} else {
								container.textContent = "Error al cargar la frase.";
							}
						}
					)
					.catch( error => console.error( "Error:", error ) );
				}
			);
		}
	}
);


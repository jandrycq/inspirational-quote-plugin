/**
 * JavaScript file for Inspirational Quote Plugin.
 *
 * @package InspirationalQuote
 */

document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("new-quote");
    const container = document.getElementById("quote-container");

    if (button && container) {
        button.addEventListener("click", function () {
            console.log("Botón presionado: enviando petición AJAX...");
            fetch(iq_ajax.ajaxurl + "?action=get_quote")
                .then(response => response.json())
                .then(data => {
                    console.log("Respuesta AJAX:", data);
                    if (data.success && data.data && data.data.quote) {
                        console.log("Insertando frase en el HTML:", data.data.quote);
                        container.textContent = data.data.quote;
                    } else {
                        container.textContent = "Error al cargar la frase.";
                        console.error("Error en la respuesta AJAX:", data);
                    }
                })
                .catch(error => {
                    container.textContent = "Error de conexión.";
                    console.error("Error de red:", error);
                });
        });
    }
});




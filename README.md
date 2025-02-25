Inspirational Quote Plugin

Este es un plugin para WordPress que muestra frases inspiradoras aleatorias en tu sitio web. Permite actualizar las frases sin recargar la página utilizando AJAX y carga las citas desde un archivo JSON.

✨ Características

Shortcode [frase_inspiradora] para insertar frases inspiradoras en cualquier parte del sitio.

Carga automática de una frase aleatoria al abrir la página.

Actualización dinámica con AJAX para cambiar frases sin recargar.

Diseño personalizable con style.css.

Internacionalización lista para traducciones.

Estructura en OOP (Programación Orientada a Objetos) para mayor organización del código.

📚 Estructura del Proyecto

inspirationalQuotePlugin/
│── assets/
│   ├── css/
│   │   └── style.css   # Estilos personalizados
│   ├── js/
│   │   ├── script.js   # JavaScript para AJAX
│   │   └── quotes.json # Archivo con frases inspiradoras
│── languages/
│   ├── inspirational-quote-es_ES.mo
│   ├── inspirational-quote-es_ES.po
│   └── inspirational-quote.pot
│── class-inspirationalquote.php  # Lógica principal del plugin
│── README.md  # Documentación

🛠️ Instalación

Descarga o clona el repositorio:

git clone https://github.com/jandrycq/inspirational-quote-plugin.git

Sube la carpeta inspirationalQuotePlugin a /wp-content/plugins/.

Activa el plugin desde el panel de administración de WordPress.

Usa el shortcode [frase_inspiradora] en cualquier página o entrada para mostrar frases.

🖥️ Cómo funciona

Al cargar la página, se muestra una frase aleatoria.

El botón "Nueva frase" permite actualizar la frase sin recargar la página.

Las frases se obtienen desde assets/js/quotes.json y pueden ser editadas manualmente.

Los estilos están en assets/css/style.css para facilitar la personalización.

🌟 Decisiones Técnicas

JSON para almacenar frases: Se eligió un archivo quotes.json para facilitar la edición y escalabilidad.

AJAX con JavaScript puro: Se usa fetch() para actualizar las frases de forma dinámica.

Internacionalización: El plugin está preparado para traducciones mediante .mo y .po.

Estructura modular: Separación clara entre PHP, JavaScript y CSS para mantener el código organizado.

🛠️ Dificultades y Soluciones

Problema

*1 Los estilos no se cargaban
*2 No se mostraba una frase al inicio

Solución

*1 Se corrigió la ruta en enqueue_scripts().

*2 Se modificó display_quote() para solucionar esto.

🌟 Mejoras Futuras

Panel de administración para que el usuario edite frases desde WordPress sin modificar quotes.json.

Conexión con API externas para obtener frases en tiempo real.

Bloque de Gutenberg para permitir insertar frases en el editor de WordPress sin usar shortcodes.

📚 Notas sobre mi aprendizaje

Este proyecto me permitió reforzar mis conocimientos en PHP, WordPress y AJAX con JavaScript puro. Aunque no incluí un bloque de Gutenberg, reconozco que es un área que aún necesito aprender mejor, ya que requiere conocimientos en React y JavaScript moderno. Es algo en lo que quiero enfocarme a futuro para mejorar mis habilidades como desarrollador de WordPress.

👤 Autor

Jandry SánchezGitHub: jandrycq

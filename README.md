<<<<<<< HEAD
# Technical Test: "Inspirational Quote" Plugin for WordPress

## Objective
Develop a WordPress plugin that displays a random inspirational quote on the site. The plugin must be implemented following WordPress coding standards, using object-oriented programming (OOP) in PHP and Vanilla JavaScript on the frontend.

## General Requirements

- **Code Quality:**  
  - Follow the [WordPress coding standards](https://developer.wordpress.org/coding-standards/).  
  - Comment the code clearly and concisely (use PHPDoc for functions and classes).  
  - Avoid redundant or unnecessary code.
  - Use internationalization functions for text strings.

- **Version Control:**  
  - Use Git for version control.
  - Create a new branch from Trunk and push your code there
  - Once you are sure about your work, create a PR from the branch you created to Trunk
  - Fix all errors that may arise in your PR
  - Merge your PR once everything works and notify us to check it

- **Delivery Time:**  
  - The task must be completed within one week.

- **Communication:**  
  - If you encounter any difficulties or have questions during development, proactively seek feedback.  
  - Include a section in the README detailing the decisions made and any inquiries you have posed during the development process.

## Technical Requirements

### PHP

- **Plugin Structure:** 
  - Name the plugin with the name of this repo  
  - Implement the plugin using object-oriented programming (OOP).  
  - Create at least one main class that initializes and organizes the plugin’s functionality.

- **Actions and Filters:**  
  - Use WordPress actions and filters to integrate your plugin.  
  - For example, register a shortcode `[frase_inspiradora]` that allows the functionality to be inserted anywhere on the site.

- **Functionality:**  
  - When the shortcode is used, the plugin should display a randomly selected inspirational quote.  
  - You can either use a predefined array of quotes or load them from an external JSON file.

### JavaScript

- **Frontend Interactivity:**  
  - Use **Vanilla JavaScript** to create a feature that updates the quote without reloading the page.  
  - Implement an AJAX call (or utilize the WP REST API) to fetch a new quote from the backend when the user clicks a button.

### Extra Points

- **Custom Gutenberg Block:**  
  - Develop a custom Gutenberg block that, like the shortcode, displays a random inspirational quote.  
  - This block should be built using native WordPress technologies (modern JavaScript without external frameworks).

## Documentation and Delivery

- **Project README:**  
  - Clearly explain how to install and use the plugin.  
  - Describe the functionalities implemented and how to test them.  
  - Include any major technical decisions and outline the steps you took to arrive at the solution.

- **Code:**  
  - Ensure the code is clean, well-commented, and properly structured.  
  - Follow best practices and WordPress standards.

- **Communication:**  
  - If you encounter difficulties or have questions regarding any of the requirements, communicate them to receive feedback. Proactive communication will be highly valued.

## Final Notes
This task is designed to evaluate your technical skills in PHP (OOP, actions, filters), JavaScript (using Vanilla JS for AJAX), and your ability to communicate and document your work effectively. Remember that your code should be hosted in a public GitHub repository, and the quality of the code will be evaluated.

Good luck!
=======
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
>>>>>>> main

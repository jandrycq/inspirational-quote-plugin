# Inspirational Quote Plugin

## 📌 Descripción
Este es un plugin para WordPress que muestra frases inspiradoras aleatorias en el sitio web. Se implementó siguiendo los estándares de codificación de WordPress, utilizando Programación Orientada a Objetos (OOP) en PHP y Vanilla JavaScript en el frontend.

## 🛠 Requisitos
- PHP 7.4 o superior
- WordPress 5.0 o superior
- jQuery (incluido en WordPress)

## 🚀 Instalación
1. Descarga el repositorio o clónalo usando Git:
   ```sh
   git clone https://github.com/jandrycq/inspirational-quote-plugin.git
   ```
2. Copia la carpeta del plugin en `wp-content/plugins/` de tu instalación de WordPress.
3. Activa el plugin desde el panel de administración de WordPress en `Plugins > Instalados`.

## ✨ Uso
1. Para mostrar una frase inspiradora en cualquier parte del sitio, usa el shortcode:
   ```sh
   [frase_inspiradora]
   ```
2. También se puede añadir a una página o post desde el editor de WordPress.
3. Al hacer clic en el botón "Nueva frase", se obtiene una nueva frase sin recargar la página.

## ⚙️ Decisiones Técnicas
- Se usó un array de frases en el backend, pero se puede mejorar cargándolas desde un JSON externo.
- Se utilizó `wp_localize_script` para enviar la URL de AJAX a JavaScript.

## 🛠 Dificultades y Soluciones
- Hubo un error al cargar los assets porque la carpeta estaba mal escrita como "assests". Se corrigió el nombre y funcionó.

## 🔮 Posibles Mejoras
- Cargar frases desde un archivo JSON en lugar de tenerlas hardcodeadas.
- Implementar un bloque de Gutenberg para mayor compatibilidad con el editor moderno de WordPress.
- Añadir una opción en el panel de administración para que el usuario agregue sus propias frases.

## 👨‍💻 Autor
- **Jandry Sánchez**
- [GitHub](https://github.com/jandrycq)

---

📢 **Nota:** Si encuentras algún problema o tienes sugerencias, ¡no dudes en abrir un issue en el repositorio de GitHub! 😊


# Inspirational Quote Plugin

Este es un plugin para WordPress que muestra frases inspiradoras aleatorias en tu sitio web. Permite actualizar las frases sin recargar la página utilizando AJAX y se basa en un archivo JSON para la gestión de citas.

---

## 🚀 Características
- 📌 **Shortcode** `[frase_inspiradora]` para insertar frases inspiradoras en cualquier parte del sitio.
- ⚡ **Carga inicial con una frase aleatoria** sin necesidad de presionar el botón.
- 🛠️ **Actualización dinámica** de frases mediante **AJAX**.
- 🎨 **Estilos personalizados** con `style.css` para mejorar el diseño.
- 🌍 **Internacionalización** con archivos `.mo` y `.po` listos para traducción.
- ✅ **Código estructurado en OOP (Programación Orientada a Objetos)**.

---

## 📚 **Estructura del Proyecto**
```
inspirationalQuotePlugin/
│── assets/
│   ├── css/
│   │   └── style.css   # Estilos personalizados
│   ├── js/
│   │   ├── script.js   # Lógica en JavaScript para AJAX
│   │   └── quotes.json # Archivo con frases inspiradoras
│── languages/
│   ├── inspirational-quote-es_ES.mo
│   ├── inspirational-quote-es_ES.po
│   └── inspirational-quote.pot
│── class-inspirationalquote.php  # Lógica principal del plugin
│── README.md  # Documentación
```

---

## 🛠️ **Instalación**
1. **Descarga el código o clónalo desde GitHub**:
   ```sh
   git clone https://github.com/jandrycq/inspirational-quote-plugin.git
   ```
2. **Sube la carpeta `inspirationalQuotePlugin` a `/wp-content/plugins/`.**
3. **Activa el plugin** en el panel de administración de WordPress.
4. **Añade el shortcode `[frase_inspiradora]`** en cualquier página o entrada donde quieras mostrar frases inspiradoras.

---

## 🖥️ **Funcionamiento**
1. **Carga una frase inspiradora al abrir la página.**
2. **Al presionar el botón "Nueva frase", la frase cambia sin recargar la página.**
3. **Las frases se almacenan en `assets/js/quotes.json`.** Puedes editar este archivo para agregar nuevas frases.
4. **El diseño se personaliza con `assets/css/style.css`**.

---

## 🛠️ **Decisiones Técnicas**
- **📁 Uso de JSON**: Las frases se cargan desde `quotes.json` en lugar de estar en código estático.
- **✨ AJAX con Vanilla JavaScript**: Se utiliza `fetch()` para obtener nuevas frases dinámicamente.
- **🎨 CSS Mejorado**: Se aplicaron estilos básicos en `style.css` para mejorar la apariencia.
- **🔍 Depuración con DevTools**: Se solucionó un error donde el CSS no se cargaba por un archivo mal nombrado (`styles.css` en vez de `style.css`).

---

## 🔧 **Dificultades y Soluciones**
**No se cargaban los estilos** | Se corrigó el nombre del archivo y la ruta en `enqueue_scripts()`. |
**No se cargaba una frase al inicio** | Se modificó `display_quote()` para mostrar una frase al cargar la página. |

---

## ✨ **Mejoras futuras**
- Agregar una interfaz de administración para que el usuario pueda **editar frases desde WordPress** sin modificar el archivo JSON.
- Conectar el plugin con una API de frases inspiradoras externas.

---

## 📝 **Autor**
👤 **Jandry Sánchez**  
🔗 GitHub: [jandrycq](https://github.com/jandrycq)

---

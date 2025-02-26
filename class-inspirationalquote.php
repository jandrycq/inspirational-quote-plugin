<?php
/**
 * Plugin Name: Inspirational Quote
 * Plugin URI: https://example.com
 * Description: Muestra frases inspiradoras aleatorias en tu sitio.
 * Version: 1.0.0
 * Author: Jandry Sánchez
 * Author URI: https://example.com
 * License: GPL2
 * Text Domain: inspirational-quote
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class InspirationalQuote {

	/**
	 * Constructor del plugin.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'load_textdomain' ) );
		add_shortcode( 'frase_inspiradora', array( $this, 'display_quote' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'wp_ajax_get_quote', array( $this, 'ajax_get_quote' ) );
		add_action( 'wp_ajax_nopriv_get_quote', array( $this, 'ajax_get_quote' ) );
	}

	/**
	 * Carga el dominio de texto del plugin.
	 */
	public function load_textdomain() {
		load_plugin_textdomain( 'inspirational-quote', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Carga los scripts del plugin.
	 */	
	public function enqueue_scripts() {
		wp_enqueue_script('iq-script', plugin_dir_url(__FILE__) . 'assets/js/script.js', array('jquery'), '1.0', true);
		wp_enqueue_style('iq-style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
		wp_localize_script('iq-script', 'iq_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));
	}


	/**
	 * Devuelve una cita aleatoria al frontend a través de AJAX desde un archivo JSON.
	 */
	public function ajax_get_quote() {
		$json_file = plugin_dir_path(__FILE__) . 'assets/js/quotes.json';
	
		if (!file_exists($json_file)) {
			wp_send_json_error(array('message' => __('No se encontró el archivo de frases.', 'inspirational-quote')));
			return;
		}
	
		$quotes = json_decode(file_get_contents($json_file), true);
	
		if (empty($quotes) || !is_array($quotes)) {
			wp_send_json_error(array('message' => __('Error al leer las frases.', 'inspirational-quote')));
			return;
		}
	
		$random_quote = $quotes[array_rand($quotes)];
		$random_quote = htmlspecialchars_decode($random_quote, ENT_QUOTES); // Asegura que los caracteres especiales se interpreten bien
	
		wp_send_json_success(array('quote' => $random_quote));
	}
	
	/**
	 * Genera la estructura HTML del plugin con una frase aleatoria al cargar la página.
	 */
	public function display_quote() {
		$json_file = plugin_dir_path(__FILE__) . 'assets/js/quotes.json';

		$default_quote = __('No hay frases disponibles.', 'inspirational-quote');

		if (file_exists($json_file)) {
			$quotes = json_decode(file_get_contents($json_file), true);
			if (!empty($quotes) && is_array($quotes)) {
				$default_quote = $quotes[array_rand($quotes)];
			}
		}

		ob_start();
		?>
		<div id="quote-container"><?php echo esc_html($default_quote); ?></div>
		<button id="new-quote"><?php esc_html_e('Nueva frase', 'inspirational-quote'); ?></button>
		<?php
		return ob_get_clean();
	}

}

new InspirationalQuote();




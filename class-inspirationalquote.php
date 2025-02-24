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
	exit; // Evita acceso directo.
}

class InspirationalQuote {

	/**
	 * Constructor for the Inspirational Quote class.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'load_textdomain' ) );
		add_shortcode( 'frase_inspiradora', array( $this, 'display_quote' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'wp_ajax_get_quote', array( $this, 'ajax_get_quote' ) );
		add_action( 'wp_ajax_nopriv_get_quote', array( $this, 'ajax_get_quote' ) );
	}

	public function load_textdomain() {
		load_plugin_textdomain( 'inspirational-quote', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Carga los scripts del plugin.
	 */
	public function enqueue_scripts() {
		wp_enqueue_script( 'iq-script', plugin_dir_url( __FILE__ ) . 'assets/js/script.js', array( 'jquery' ), '1.0', true );
		wp_localize_script( 'iq-script', 'iq_ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	}

	/**
	 * Devuelve una cita aleatoria al frontend a través de AJAX.
	 */
	public function ajax_get_quote() {
		$quotes = array(
			__( 'La vida es 10% lo que te sucede y 90% cómo reaccionas.', 'inspirational-quote' ),
			__( 'El éxito no es definitivo, el fracaso no es fatal.', 'inspirational-quote' ),
			__( 'Tu tiempo es limitado, no lo desperdicies viviendo la vida de otros.', 'inspirational-quote' ),
		);

		wp_send_json( array( 'quote' => $quotes[ array_rand( $quotes ) ] ) );
	}

	/**
	 * Genera la estructura HTML del plugin.
	 */
	public function display_quote() {
		ob_start();
		?>
		<div id="quote-container"><?php echo esc_html( $this->get_random_quote() ); ?></div>
		<button id="new-quote"><?php _e( 'Nueva frase', 'inspirational-quote' ); ?></button>
		<?php
		return ob_get_clean();
	}

	/**
	 * Obtiene una frase aleatoria.
	 */
	public function get_random_quote() {
		$quotes = array(
			__( 'La vida es 10% lo que te sucede y 90% cómo reaccionas.', 'inspirational-quote' ),
			__( 'El éxito no es definitivo, el fracaso no es fatal.', 'inspirational-quote' ),
			__( 'Tu tiempo es limitado, no lo desperdicies viviendo la vida de otros.', 'inspirational-quote' ),
		);
		return $quotes[ array_rand( $quotes ) ];
	}
}

new InspirationalQuote();




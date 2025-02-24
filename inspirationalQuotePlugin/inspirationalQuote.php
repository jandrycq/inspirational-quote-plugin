<?php
/**
 * Plugin Name: Inspirational Quote
 * Description: Muestra frases inspiradoras aleatorias en tu sitio.
 * Version: 1.0.0
 * Author: Jandry
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit; // Evita acceso directo
}

class InspirationalQuote {
    public function __construct() {
        add_shortcode('frase_inspiradora', [$this, 'display_quote']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
        add_action('wp_ajax_get_quote', [$this, 'get_random_quote']);
        add_action('wp_ajax_nopriv_get_quote', [$this, 'get_random_quote']);
    }

    public function enqueue_scripts() {
        wp_enqueue_script('iq-script', plugin_dir_url(__FILE__) . 'assets/js/script.js', ['jquery'], '1.0', true);
        wp_localize_script('iq-script', 'iq_ajax', ['ajaxurl' => admin_url('admin-ajax.php')]);
    }

    public function display_quote() {
        return '<div id="quote-container">"'. $this->get_random_quote() .'"</div>
                <button id="new-quote">Nueva frase</button>';
    }

    public function get_random_quote() {
        $quotes = [
            "La vida es 10% lo que te sucede y 90% cómo reaccionas.",
            "El éxito no es definitivo, el fracaso no es fatal.",
            "Tu tiempo es limitado, no lo desperdicies viviendo la vida de otros."
        ];
        echo json_encode($quotes[array_rand($quotes)]);
        wp_die();
    }
}

new InspirationalQuote();

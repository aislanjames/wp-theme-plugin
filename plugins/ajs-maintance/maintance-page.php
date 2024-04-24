<?php
/**
 * Plugin Name: Site em Manutenção
 * Description: Um plugin que cira uma página de manutenção personalizada e a torna a página principal do seu site WordPress.
 * Version: 1.0
 * Author: Aislan James
 */

 function pm_create_maintance_page() {
    $pagina = array(
        'post_title'   => 'Manutenção',
        'post_content' => '[maintance_page]', // Aqui você usará um shortcode
        'post_status'  => 'publish',
        'post_type'    => 'page',
    );

    // Inserir a página de manutenção e obter o ID
    $page_id = wp_insert_post($pagina);

    // Armazenar a configuração da página inicial original
    $original_homepage_id = get_option('page_on_front');
    update_option('pm_original_homepage_id', $original_homepage_id);

    // Definir a nova página de manutenção como página inicial
    update_option('page_on_front', $page_id);
    update_option('show_on_front', 'page'); // Certifique-se de que o WordPress está configurado para mostrar uma página estática como home
}

function pm_remove_maintance_page() {
    $pagina = get_page_by_title('Manutenção');
    wp_delete_post($pagina->ID, true);

    // Restaurar a configuração original da página inicial
    $original_homepage_id = get_option('pm_original_homepage_id');
    update_option('page_on_front', $original_homepage_id);
    delete_option('pm_original_homepage_id'); // Limpar a opção após restaurar
}

register_activation_hook(__FILE__, 'pm_create_maintance_page');
register_deactivation_hook(__FILE__, 'pm_remove_maintance_page');

function pm_shortcode_maintance_page() {
    ob_start();
    
    require_once(plugin_dir_path(__FILE__) . 'structure-page.php'); // Estrutura da página de manutenção

    return ob_get_clean();
}

function pm_enqueue_scripts() {
    wp_enqueue_style('pm-style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
    wp_enqueue_script('pm-script', plugin_dir_url(__FILE__) . 'assets/js/scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'pm_enqueue_scripts');


add_shortcode('maintance_page', 'pm_shortcode_maintance_page');

<?php

function pm_add_admin_page() {
    add_menu_page('Página de Manutenção', 'Manutenção', 'manage_options', 'pm_admin', 'pm_admin_page_html');
}
add_action('admin_menu', 'pm_add_admin_page');

function pm_admin_page_html() {
    ?>
    <!-- HTML para a página de administração aqui -->
    <?php
}

<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One_Child
 * @since Twenty Twenty-One-Child 1.0
 */

// your code here ...
function ajout_sous_menu() {
    add_submenu_page(
        'options-general.php',
        'Nouveau Menu',
        'Nouveau Menu',
        'manage_options',
        'nouveau-menu',
        'page_nouveau_menu'
    );
}
add_action('admin_menu', 'ajout_sous_menu');

function page_nouveau_menu() {
    ?>
    <div class="wrap">
        <form method="post" action="options.php">
            <?php
            settings_fields('nouveau_menu_settings');
            do_settings_sections('nouveau_menu_settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function initialiser_nouveau_menu_settings() {
    add_settings_section(
        'section_nouveau_menu',
        '',
        'section_nouveau_menu_callback',
        'nouveau_menu_settings'
    );

    add_settings_field(
        'activer_shortcode',
        'Activer le shortcode',
        'activer_shortcode_callback',
        'nouveau_menu_settings',
        'section_nouveau_menu'
    );

    register_setting(
        'nouveau_menu_settings',
        'activer_shortcode'
    );
}
add_action('admin_init', 'initialiser_nouveau_menu_settings');

function section_nouveau_menu_callback() {
}

function activer_shortcode_callback() {
    $activer_shortcode = get_option('activer_shortcode');
    ?>
    <label>
        <input type="checkbox" name="activer_shortcode" value="1" <?php checked($activer_shortcode, 1); ?> />
    </label>
    <?php
}
$nom_shortcode = 'mes-services';
function mon_shortcode() {
    $activer_shortcode = get_option('activer_shortcode');
    global $nom_shortcode;
    if ($activer_shortcode) {
        return "<ul>
            <li>Service 1</li>
            <li>Service 2</li>
            <li>Service 3</li>
            <li>Service 4</li>
        </ul>";
    }return "[$nom_shortcode]";

    return '';
}
add_shortcode($nom_shortcode, 'mon_shortcode');
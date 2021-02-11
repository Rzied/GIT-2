<?php
/*
Plugin Name: Hello World
Plugin URI:
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Zied RJEB
Version: 0.1
Author URI:
 */

class HelloWorld_Plugin
{
    public function __construct()
    {
        include_once plugin_dir_path(__FILE__) . '/helloClass.php';
        new HelloClass();
        register_activation_hook(__FILE__, array('helloclass', 'install'));
        register_deactivation_hook(__FILE__, array('helloclass', 'uninstall'));
        add_action('admin_menu', array($this, 'add_admin_menu'), 20);
    }
    public function add_admin_menu()
    {
        //on ajoute une page dans le menu administrateur
        add_menu_page('Hello World', 'Hello World plugin', 'manage_options', 'helloworld', array($this, 'menu_html'));
    }
    
    public function menu_html()
    {
        echo '<h1>' . get_admin_page_title() . '</h1>';
?>
        <form method="post" action="options.php">
        <?php settings_fields('helloworld_settings') ?>
            <label>Couleur</label>
            <input type="text" name="helloworld_couleur" value="<?php echo get_option("helloworld_couleur") ?>" />
            <?php submit_button(); ?>
        </form>
<?php
    }
}

new HelloWorld_Plugin();

<?php
/* Plugin Name: Carte visite
Description: Carte visite Widget
Author: Zied RJEB
Version: 1.0 
*/
class CarteVisite_Plugin{ 
    public function __construct(){ 
        include_once plugin_dir_path(__FILE__).'/carteClass.php';
        register_activation_hook(__FILE__, array('carteclass','install'));
        register_deactivation_hook(__FILE__, array('carteclass', 'uninstall'));
        add_action('admin_menu', array($this, 'add_admin_menu'),20);
        add_action('admin_init', array($this, 'register_settings'));
        new carteClass();
    } 
    public function add_admin_menu(){
        //on ajoute une page dans le menu administrateur
        add_menu_page('CarteVisite', 'Carte de visite', 'manage_options', 'carteVisite', array($this, 'menu_html'));
    }
    public function menu_html(){ 
        echo '<h1>'.get_admin_page_title().'</h1>';
        ?>
        <form method="post" action="options.php">
            <label>Couleur de la police : </label>
            <input type="color" value="" name="cartevisite_couleur" /> <br><br>
            <label>Nom : </label>
            <input type="text" value="" name="cartevisite_nom" /><br><br>

            <label>Prenom : </label>
            <input type="text" value="" name="cartevisite_prenom" /><br><br>
            
            <div>
            <label>Genre : </label>
            </div>
            <div>
            <label for="">Homme</label>
            <input type="radio" value="homme" name="cartevisite_genre" >
            <label for="">Femme</label>
            <input type="radio" value="femme" name="cartevisite_genre">
            </div>
            
            <label>Affichage nom : </label>
            <input type="radio" value="nom-prenom" name="cartevisite_aff_nom" />
            <label for="nom-prenom">Nom-Prenom</label>
            <input type="radio" value="prenom-nom" name="cartevisite_aff_nom" />
            <label for="prenom-nom">Prenom-Nom</label><br><br>
            <?php submit_button(); ?>
            <?php settings_fields('cartevisite_settings') ?>
        </form>
        <?php
    }

    public function register_settings(){
        register_setting('cartevisite_settings', 'cartevisite_couleur');
        // register_setting('cartevisite_settings', 'cartevisite_genre');
        register_setting('cartevisite_settings', 'cartevisite_aff_nom');
        global $wpdb;
        $wpdb->UPDATE ("{$wpdb->prefix}cartevisite", array('id' => "null",'nom' => $_POST['cartevisite_nom'],'prenom' => $_POST['cartevisite_prenom'],'genre' => $_POST['cartevisite_genre']), array( 'id' => 1 ));
        
    }
} 
new CarteVisite_Plugin();
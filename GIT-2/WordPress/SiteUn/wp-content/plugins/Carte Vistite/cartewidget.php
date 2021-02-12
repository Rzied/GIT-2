<?php
class carteWidget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('cartevisite', 'Carte visite', array('description' => 'Un plug-in de carte visite'));
    }

    public function widget($args, $instance)
    {
        // formulaire afficher à l'écran pour l'utilisateur
        // on appel les méthodes standard au cas où un autre plug-in les aurait surchargées
        echo $args['before_widget'];
        echo $args['before_title'];
        echo apply_filters('widget_title', $instance['title']);
        echo $args['after_title'];
         // corps du widget
        global $wpdb;
        $row=$wpdb->get_row("SELECT * FROM {$wpdb->prefix}cartevisite ;");
        $couleur = get_option('cartevisite_couleur', 'white');
        $nom = $row->nom;
        $prenom = $row->prenom;
        $genre = $row->genre;
        $affNom= get_option('cartevisite_aff_nom','nom-prenom');
        ?>
         <h1>Carte visite</h1>
        <div id="carte">
            <div class="colonne">
                <div class="colonne" id="recto">
                    <?php 
                    if($affNom=="nom-prenom"){
                        echo '<div style="color:'.$couleur.'">'.$nom." ".$prenom.'</div> ';
                    }else{
                        echo '<div style="color:'.$couleur.'">'.$prenom." ".$nom.'</div> ';
                    }
                    ?>
                </div>
                <div class="colonne" id="verso">
                <?php
                    if($genre=="homme"){
                        echo '<div>'.$genre.'<img src="http://git-2/WordPress/SiteUn/wp-content/uploads/2021/02/mec.png" alt=""></div>';
                    }
                    if($genre=="femme"){
                        echo '<div>'.$genre.'<img src="http://git-2/WordPress/SiteUn/wp-content/uploads/2021/02/meuf.png" alt=""></div>';
                    }
                    ?>
                </div>
            </div>
        </div>
                   
        <?php
        echo $args['after_widget'];
    }
    public function form($instance)
    // formulaire de gestion des paramètres pour le module d'administration
    { 
        $title = isset($instance['title']) ? $instance['title'] : '';
        ?> 
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <?php
    }
}
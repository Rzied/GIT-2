<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'siteun' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'foa8H%Mr6jTWjG@|Vpp1RiTjL0SD{6h6=u.<MF9it9II6(o6vYtzWn+ww&?fXO.u' );
define( 'SECURE_AUTH_KEY',  'Ef[%Ogf3o,TQPmZ%%.{ZFKTa(cvrY]3LsIKO9j[8S0%_wmO<p}v8A74|0 vJ;<J[' );
define( 'LOGGED_IN_KEY',    ')au`UkwKU7DG6+0`~w=K#-`dMph<=>5uq[!u()2c@jvTHl&$q;[3ys,&A4Asnd=?' );
define( 'NONCE_KEY',        'LPQY.nK5P|q2&_WAWjWe$-6kT7nK3|=a)G&,VKZ)r*lr1JSMiKw^y2v~>E5(k/K?' );
define( 'AUTH_SALT',        'O/*/.0qE&O?{eXb]Px!yV$/%~1W+Uy8:8fqD<DQG.rz(-%znHDxMCDQO/(9]I;!3' );
define( 'SECURE_AUTH_SALT', 'don(#N88!acM$3f5b[VLcx#3XpD7~>3PNsluEy6pcr)K:6^B~NK</]Jq(J4!+EYI' );
define( 'LOGGED_IN_SALT',   'nphu:Vrk/:=LFr4Nh4ou?5M>hZJJ8v~+;.&*|89PnF!U.LLjl*8m6f#K=JWbHBNZ' );
define( 'NONCE_SALT',       'Y6&o$-.Lk>cF.gkIu!Nl(f>_as*zQ.KdF1{=1%Vf8Wor@.JI:35 ra=]<j&i(Ha0' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

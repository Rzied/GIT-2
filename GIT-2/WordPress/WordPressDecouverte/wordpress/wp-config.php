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
define( 'DB_NAME', 'WpExplore' );

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
define( 'AUTH_KEY',         'v0c:+ghTt0vaN=mo_2`J&GXA%.hA(Y53~]mMm>aoOQqg?7,&>hLZa&{ :YHNB7gQ' );
define( 'SECURE_AUTH_KEY',  '~M:LR&rWR-2-0$m=8cgRBD?~lY~tm#6t8}b1J_M&|qHC}} Cbj;dUwn0IQ0SlGmK' );
define( 'LOGGED_IN_KEY',    '79oX/>}]yC%lBr&~t#OEHH<Ww@wpr`>HeZq^fB(rrb&ei=$|5qaX5h{yT>JGN/:=' );
define( 'NONCE_KEY',        '0T,YvQK&bjXe=Ng!uC-J.(*:H#&1d_hx>K$C5LKmU81?m$>8?pvDDWC90S%@V9c$' );
define( 'AUTH_SALT',        'BgH8~,%G7CF&tc.[TsF!cp@SY=k^g+f:+gVY.(a]3U(&,|syc|FA}hVklc2Baq!]' );
define( 'SECURE_AUTH_SALT', ']qe)+1yjR45saVA+9E`P<Nu:bW=WzRv(X21JtYu(*ldWK1=$J<WrKIEWcF7^wJd>' );
define( 'LOGGED_IN_SALT',   'bg<]6k*kSR52v^w(u&j&yo@h=Fa?{$Xrw;&2&b.BiMf[;O9 omSgq5Wu#Tnx5?nb' );
define( 'NONCE_SALT',       'Y][{eeyOMW[[oQ<X=2it^b`MGpeVYxU7:B]/K!G+Se.Uz;UU!*%R%(%HQP:do4c.' );
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

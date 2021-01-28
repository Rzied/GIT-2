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
define( 'DB_NAME', 'WordPressDecouverte' );

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
define( 'AUTH_KEY',         'T`TRx& -<.</Ek/-.u0)r79ocz^4AsaGR&%E=FtpkE&+>~UdKCR7`sA:0?Cq[%mU' );
define( 'SECURE_AUTH_KEY',  'k?UEi{PTAab}X7h:Ee=s[6T(}XD5#R@2VO#>V=a/P/p5MXJ&RVdHx)(irs^Y,W):' );
define( 'LOGGED_IN_KEY',    '#tc;m2o@os>lKrNj;w4BbUn9>of+<!jC~x&@NZ*zxzu1g/rsx%#hRws[nabZ3{(?' );
define( 'NONCE_KEY',        'mUb,l~Dh:>^<z[8$6dz*9jW+>p~Z^d%qDf`IF9LUV)F7![~rhAC~IQ~G0RSLwor(' );
define( 'AUTH_SALT',        'm7fcIx>%!$5/a})1n6*LqR(1nOZ`ZuLQ@-9,du-*+fYK.cu|pnP0gS.Uv_f!%+U<' );
define( 'SECURE_AUTH_SALT', '0Sky(_sjy?=b-!rCw/NO9_=ik!;a9OZn?VPbU2/^vfSp5G>kbg8(N_4e.t_]& <L' );
define( 'LOGGED_IN_SALT',   'V(mg0D #RfK0Ov}%)u{;q/g@U9]d/FE,C&&HKV:g ~RKgj AIeZ;8_SjOZvd@O};' );
define( 'NONCE_SALT',       '4L_UFgv)s9W)#MBfu`D=pB=@J~UH%2TZFZ9iw+S@^8&0!I(76K,RgN] 6d{X4ROH' );
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

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
define( 'DB_NAME', 'sitewordpress' );

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
define( 'AUTH_KEY',         ';L*7%uS}=9YeFW]vyzlo)lZ$pK_7pvH6HDuSnq}!1@(itWB((yl/W2YNeotE/4EE' );
define( 'SECURE_AUTH_KEY',  '_Iduj);gXw!H&&w@Oe1,.ivdAQizTfz1cP-yO+vFP69|t Tan2JxIpIFj}DfR/%B' );
define( 'LOGGED_IN_KEY',    'P|aYnpV?@tmiU jB?#M()& Ts%es).Pehz`4AAGvUP+;r=z$v(91$4>|VF#x)s)D' );
define( 'NONCE_KEY',        'Zk/22|!EH1rMFCqM.iGF6as Lx5OG0o7|5xA]1wo2-j`a0yC`oX`O<].uH._0pqk' );
define( 'AUTH_SALT',        ';_A%Z=cRh<5Vw~hG~}m^($|;+g0/ks}*wffZ*>g7$;G&U_iPLaoKX+$}BB@MRs+6' );
define( 'SECURE_AUTH_SALT', '&oW;wO-3NtT+O5AX6]Co;0Imrn/{+WF/hptw!9~gqIh<=~HNBrFqlj ;07N) n{f' );
define( 'LOGGED_IN_SALT',   '#:`|.5:+=3I+^T=1BvP*.W!8>vfk*T?u=}O3{b&~4wntzaVzMkcm{AZ3UIR_xx:j' );
define( 'NONCE_SALT',       '/t%&C0Y5 gQ4bmzs8&DQ/&w!i_UH5r)hNCV o^Jn]1jL_svH<&1qn}Bw3{,bfEoK' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'scra_';

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

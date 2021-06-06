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
define( 'DB_NAME', 'wordpress_3' );

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
define( 'AUTH_KEY',         'DFR]n6@*ONTec>Zjov{!Pv WNfLs,}Q.N[N&SH)?Ws6yQ#@K0TQ%<$fiXB,*j`9r' );
define( 'SECURE_AUTH_KEY',  'VLYy;sXj7hw,oX;6I_g%X0KjY<++Hg[m}#Q${bDqg0kmb12+AmD:+My^Uuc(-Cs4' );
define( 'LOGGED_IN_KEY',    'YnJw1g>|]l]Tp]}a,nHRu}Sh&bfu,qo*&{y,6-q;!Y7*FFO#cr<HQ9!!sCP*esy@' );
define( 'NONCE_KEY',        'l78Y{N-eZT5-X]&%hmaU4S|{:gIH~6|q<4W9p^7=j!w*EIJO{f$XCnk-Kqom)i|P' );
define( 'AUTH_SALT',        '`XSR@Hf#gT|AYvza{HT]xMW3qk.3zhAZLm1.6?=l=V_v<+p<$;U*-DqTXf~#k6>i' );
define( 'SECURE_AUTH_SALT', 'Zz Y(OL9`Kv{cM-R`N~to05y3Xf[cP02/she%=Qz@o/0/zpK`KX/ktv%(Q0GPSYt' );
define( 'LOGGED_IN_SALT',   'Z6z^j+y-*?hY{pm5 y=JS;|qFxW~Stjr<#6spK(!yv%x.$}&ZaA#rGAQ86zJXRkn' );
define( 'NONCE_SALT',       '.nAa(la>/!KcvL:Q_/{n#1(@)Gft9ht7aJ9.qYD|`(K^^k#&&@1tI/GoQ^fi1AX2' );
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

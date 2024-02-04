<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'test-raiky' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '5ud#veyh:6U.e,K;;RXYXG)70r+ h#Nb3Z^h*p/)Ui3}Ur%6}dHJu,tcYbk:t*uP' );
define( 'SECURE_AUTH_KEY',  'Vqw]-ypIyU YjFPCID-MK2`mXKl#%7Z`oPHozcJ9*q+46S*+1Y!lQpcjn7D@)UPj' );
define( 'LOGGED_IN_KEY',    '=BZ&V*|/9Hz<~7At3o[TnB%zp-qb_#Od7L(&[n[,7O5=aW?-@FkuH6W]}~Mxhe/m' );
define( 'NONCE_KEY',        '.0 PLRwlnO$t ;s  3; z){]z5L,/*qNVOB{!-d=$pWCW]Dz,`9N[Nzo71nki>>6' );
define( 'AUTH_SALT',        '0rk=dy*0ut0 |4Uab5Gx+y_,+mo<za.uZ!$>|?cUx-*} G|6{Ez> tKw}8VKMj79' );
define( 'SECURE_AUTH_SALT', ';w;!B5lVzj=tvR%SLzxLqIT$]!{3B5f;o<gV]8A}x)wK`+R22qpX_7oZqcEyg!pq' );
define( 'LOGGED_IN_SALT',   'u~c/~2v^]<N%cj:SEtXs0PnHqU2x,!CZd8_4aY@%tVk/)xs^3s_+,Gq8]Zin1m L' );
define( 'NONCE_SALT',       'agSXqZBeY(b=M0-#!|TRC@BUJ^vn%#S>6K<5Y@n!PK~qD:R+]`?SA0j#XtLO=TB7' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

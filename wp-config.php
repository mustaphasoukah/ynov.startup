<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-]j^Qe_/rmY6b-_gw6E r1{<+k`~_x[COlA[9I)k[(.:,fBF|c7TwsNM?GIg$FA[');
define('SECURE_AUTH_KEY',  'dKabu8!XF2YBh1-~cp,*+#=Msp:OF?H.0fl@F4@|ra7%9m*Q?n|!+L}07,,8xTM;');
define('LOGGED_IN_KEY',    '4d, +v`z+7tB!wk<_?H0~o-j+|far|+eH|FyDruYv%JeJ+5|TSh27G8yzQKft.A%');
define('NONCE_KEY',        'WX.6:M#-U9rQ)G{4:HpY^;eUr>fSBohW5Cf@TlIO}t^mB1^A`U}ZUNdH3*Si~(<2');
define('AUTH_SALT',        '6H+oYnZg(PU~t~$lb#[$OrZ*jWL+)cMj|^rMtp(p@.{dQV9P<|5zf3B$>]-Gy-Ul');
define('SECURE_AUTH_SALT', '|p766bB+y40thn!<l-G|s|4e>`eM8[BwFW|;NxYKG=[XkcFR^wQnAZ=mX4r=2)cj');
define('LOGGED_IN_SALT',   'KP5!8;sp&w /.v{7id~8ek@e$4=[91`pme+h:jp>>[3>(_l~qqVF7OXK NTQ:AT6');
define('NONCE_SALT',       'gs!$?-2-OD-(k+p?8Dg o-Wq|codRU{%a+k!B-&_`?3|r4fu;5c!+BRq2./cpyO}');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
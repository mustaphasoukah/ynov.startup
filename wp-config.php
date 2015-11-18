<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|^{jKU  X_M@JFe0@ufPhM-yKU-MzP1bz OW[:iz7R%VV+xbCn~yh+9rsi>5Ku0Z');
define('SECURE_AUTH_KEY',  '|%sTTuU1~$jNou;ZNWL|M7=b0ZVT{ulaXm`sI> O-!md{.k70F>9n{dX-QQ>/M3|');
define('LOGGED_IN_KEY',    'Cg)S~OxaRW]m-M1ALM-|JR0osjzn|4vXAQmlP@G-y!6|8Se%S3hN;p3Ec|f7l`Lk');
define('NONCE_KEY',        'aW@qZ{,gFI23-Rj_!]O+m/rb#2O_W7Ex~q|+0+[#f/}{O$8?M|1B&qAuq*Or|6D1');
define('AUTH_SALT',        'Be+IazC@-~m7G<,1-C/`yz+hqu{LFG^$UhezuQB[$n+4]XFnPmdy^d|B~@&bKI1h');
define('SECURE_AUTH_SALT', 'A@|+Y}#+M)=# aa;^dJ%WF/4((6P2c=G{`aF<:Sy8#A Q8xDq>Ca6$,BMRljk-x>');
define('LOGGED_IN_SALT',   'zf{L-KWi)Uf6a4uzq#q!]XEK8wxl=0M1PUDL.s[FLlpRyh/G=|B56I>6],VO#5~?');
define('NONCE_SALT',       'hAh,`lNlCCU[EXfe$2eHz|ehEVzz:;5)_6 @.IEm|^uGlXse^M+b<vwz;5Q5K>z/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

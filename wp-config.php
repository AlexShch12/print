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
define('DB_NAME', 'print');

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
define('AUTH_KEY',         'Z&[XUifLUCZ$(%mlvdPn!lY]:ddD#k+DF>w5h7iC:`KS]NfLjDldZ4MOZ@V3Z+3{');
define('SECURE_AUTH_KEY',  'WQ;m>:9O_ erI:1pD^4uknv`ZUQ8UOKJ-6O4!{#MK=1W LbggU>MXynM`g]3lJo,');
define('LOGGED_IN_KEY',    '%tVp;ju6qdHjP91<kg-%MrDZp)L3*8aczd&-2!.+NR*+u1n,oYu7/9d<1sOGia>/');
define('NONCE_KEY',        '}0[ t_cxdp;q[_2OE|NscDnls<f]Nen`yj~:9K!e`$cF`;%D~tGxM$;imt|C8ueM');
define('AUTH_SALT',        'as-|IA,fQFvMCB3y~)[Fa|h5Y3mz_j$)8gHNPWU:HK=k_|%lv<!;YGAs90:OBk@w');
define('SECURE_AUTH_SALT', 'mfEN0jm0yQ94<3Q{BN>Ds8wPklY/W0,lcinyIPJ_0^Jn)]6vh.pfpy~u3]Rua1 z');
define('LOGGED_IN_SALT',   '#.0w}nR[h(^?sFGo7:qW$VF6{6qRFnG.dvmK. l@4,3[*ad!Mn@=CfNj/x@[Ni6C');
define('NONCE_SALT',       '2rBkWw%OML>wM4^iVy)}qkp7}hnPXv!h<kA[VW@:q:,O(<9C,@G<:Xr=fsU*]T;H');

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

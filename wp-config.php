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
define('DB_NAME', 'learning_part_2');

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
define('AUTH_KEY',         'v#f>PL36cMFw/d.Ja0ig%*7Syo:VLG^8+: V_^O&lfz&JfcoU}s++=07)7zE#Cna');
define('SECURE_AUTH_KEY',  '>.u/^D[;0ldc(:I(@5j7Xro@URQBuZD:B:rOT?7,%^z?nkt}v@{bo[Wn$Zx)lqyx');
define('LOGGED_IN_KEY',    'W~+XBKx%JSOVI8Lvn~Ve<8Q=b0f/d8.JAbTZf1%c-v:A]9z$BN$7do=;|6/xv6_j');
define('NONCE_KEY',        '=<@c2y|FA)myxglj12 .L^z@l/y-Qx-&<P]|@Ti|1Nc z0 ;X*d!EHNo}R*C>n<o');
define('AUTH_SALT',        ')|X_@og@G[bvl#XG~bRmz!.L&6*$avJhTDh0r3.Y/X~<$^~ gx)g KDh)BNCM$7t');
define('SECURE_AUTH_SALT', 'OKSMiB Uz2K:`b0,N&_%fXg#T/+z^Tk=Lh0pbL[n?Y;c{N/QNAQt3&8EO30w${lx');
define('LOGGED_IN_SALT',   '<nyBK0n`7+agHcXXQjy}D +r&*oNg><bto1il_7WQK,8A2sD}_r=k Ix&j]7B?3b');
define('NONCE_SALT',       'qa-GoSu/B[d($p`Z&xEP?!H+S+X.eKv+CA#A6bW^=x8pJ.u%rf-IAopNIAC7:%IL');

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

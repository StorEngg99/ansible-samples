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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'ansible');

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
 * You can generate these using the (@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key servicet
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '56M=1rP7V6RaSR-(bo:hu-.okxes7|V>/+hR7$JKiAP]F^nC4p])Qt@mV*]f@BYZ');
define('SECURE_AUTH_KEY',  'huJm^5#Vx@eyy,:cwu*+Y:Q%j/*<>B7GLjmAKx>!Bc_ECRixY031rp(qrI7cx<Lt');
define('LOGGED_IN_KEY',    'n*Q$*pnFZx`ow[T?G94S~l@mR7g-Qt-r%:%$kl7I]0BQ25O0KN7PmiC]5#eQq2hE');
define('NONCE_KEY',        'X#EKy<c 5Or+5N&/q~XynD0,S`<l:g&@kIPQ*]r(!MnLtQAHBumUYj`0it^t rPC');
define('AUTH_SALT',        ',rg2D:fiySHro2-H8M+tHul3p%G(MKLqYFtCgz96soXV>nkvbZIf]PJrMj$T) GC');
define('SECURE_AUTH_SALT', 'l9-Z-v3t0rIWNXP)uV`g 8=5X&wL8oP1XNx$Fd/e?r(,_>sy79%0*QD06u6O@aL(');
define('LOGGED_IN_SALT',   '*n?JJerr=[g+Snr`!UwEtcZu&PT1)k)LFYxA7dWC!nUz.Pxh,i&Zf4tb%-`LY_QE');
define('NONCE_SALT',       'T-m,STY~:tyf9$(dmQ*<adA5tw#]c*K*:AQMV6IhmYSFMfyc8,>gCCG%MbPCF;zt');

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('FS_METHOD', 'direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sgd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#rYx4G.GQt_$,SE(a<n}]I/o]JADEx:M)-R,3|(){ksU %<f:CF- h9o~~Q)A]ro' );
define( 'SECURE_AUTH_KEY',  '#<}YkkN3dR[$nqL[V=^>PH}4#GkUS@In~j3K{|y?/`1gW[nh7S:2ne&<}(W`klYr' );
define( 'LOGGED_IN_KEY',    'A{j2AiNC@1b4)acB3}SZ`wpC}T>mz11GGd/KPpSGF[+^^U767>N`%&>+.h0LH?x(' );
define( 'NONCE_KEY',        'Xcg(7C]VXB)kZ0g(Or3&ndKuw?Z~%2$l27I|A0D@Le:ifFBa<<$Zj@6J8AA=)i&G' );
define( 'AUTH_SALT',        'S_$vYruQ!@3Z4^DiX+R<IMG*s[q]2!!a2&z~wP.c1`&e`1GcL]:anDvK/Q0 sci|' );
define( 'SECURE_AUTH_SALT', 'R`wer$q3ey8{;5Yd`q+0-%hB$WJ~Tqy51/C^<pHdlq]iH~DaF)u_-~~e-LYZe+}E' );
define( 'LOGGED_IN_SALT',   'veS;BIyOrx@4vNUc<6!O[8dyVUfE`_3Npp|GfB^Z%<uqZ=uLiV>D :6gSr8pqYD_' );
define( 'NONCE_SALT',       'A?x2*P/j+f&%-}5-`ar];jFh/R iO.n}?VT,//OadtdH-x~6WUPrl~|!8X/Z7yJ!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'FS_METHOD', 'direct' );
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lawfirm' );

/** Database username */
define( 'DB_USER', 'benson' );

/** Database password */
define( 'DB_PASSWORD', 'benson' );

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
define( 'AUTH_KEY',         'q ^gu0eWRi?*U~`9Y)P:nXbiHVBuN[!Mr`tr81>}87OT *6@zWD/{[BLa@G&9pvj' );
define( 'SECURE_AUTH_KEY',  'kUUn7>*jrhy^{jyxpNOcST_xmDqO!*rjm70KlNm;),d,3FJQ+-hgBvYO9XD9[z]O' );
define( 'LOGGED_IN_KEY',    '%^nHdUu)tV4KVd!_N:DG[RM%5atT~ewqO}G5&;a50m6l;)m_q%/oRqaCaAU<`)+X' );
define( 'NONCE_KEY',        '%#rc)`T5E:aI1nZ{cl~`O^HoU,Fxt}<nV<Agi-Sil>kLai3Ze}JDzP9[iR=^%s@(' );
define( 'AUTH_SALT',        'vRYWB|1YdE@,x`./)XUJy;k1 Q}p1)(trUe71h-JpBd>OIg:A>@d5H<uSDMFkl 1' );
define( 'SECURE_AUTH_SALT', 't9!e{O+,6h(A#69XXY}fM>{-gg{5#bwzWG^kHC7:bIvavntFZDInJ?R}j>3&@|=6' );
define( 'LOGGED_IN_SALT',   'IS[C~jS*z5Nsf^y(5S!TGrt*[:]_D[W13PhnCo%S*QhE:EvC|=kQe~fXp7<mBaNa' );
define( 'NONCE_SALT',       'V:;YNP^RQso!Xue!z/xQjI*Qm<*@=U*aM7#9!=S{3e]egZ<$%.K=<QjhSy+#|y9[' );

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
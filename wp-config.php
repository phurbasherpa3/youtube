<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'youtube' );

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
define( 'AUTH_KEY',         'eDq&J#c9a6><CL-/83MOaaqp)@~SA!.c~/!;kF|L&K`e]!u_p1UOvki%sZ:vK(z`' );
define( 'SECURE_AUTH_KEY',  'T-cXR?(K .tMg;>x#N5{.tU>hiZ6<,b60kgdBDtr]Xm9:7Ln1NaFC!;h^FN?&*uX' );
define( 'LOGGED_IN_KEY',    'QtF5s1pJN,Y$>bSDFUwJOf$KM> 50!v#e oOg;3<Y-WBVDZ0/Z&y%(3L8t-Ee+_>' );
define( 'NONCE_KEY',        '9DPAD47N &L)-rZFWiQ%t_gO1@^NN(3+JmSCbk(-1o`-?ILr jE:pW_(F=C&e7#S' );
define( 'AUTH_SALT',        '*oT31IlGu. CMi8b`i<j`@jnGS@vQ|z~s$6 a&S;)(NqfPPIS0Y0!pY/C&rFb|y[' );
define( 'SECURE_AUTH_SALT', 'LCC=-1@$t>J.{9XZQ#CixI[mN@o-t?,5-Z=V5*ue&Bd&5gI;]:V9Y|fzgP1lu3EG' );
define( 'LOGGED_IN_SALT',   'x|)Yj6;1w]G^:;as`(Ssrj6JIiy}JupK$bQ`,aC8-,m;zJkEeJp8_~i#ftj*x.!7' );
define( 'NONCE_SALT',       'gVI%dh^B,|QUEC7o;)t] #iZ7Lfzl9$~wX_kCo5xJ2[&W:6lxt2h_)SOQK{Hv[|I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

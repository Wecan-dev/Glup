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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define("FS_METHOD", "direct");
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_glup' );

/** MySQL database username */
define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>u;TSj[fy)caNp@)4`t]({eDWvoydL}NkQg26W3Q[,4/r*!_-1%#T}8Ay!jZ&QRO' );
define( 'SECURE_AUTH_KEY',  '4WV+xVM_a?i=0d=y0a+DJ3x_T+DMR;dh!.1dpyCV??: +o?-fX-GQCg~I;Doz|m$' );
define( 'LOGGED_IN_KEY',    '6i4_ dPe11DO`[t9pwC/Jayz;H39F,nPQ6J*Ywyf*}lv-Y-~_cg*fuSOaR]6=<+f' );
define( 'NONCE_KEY',        'Rsb,)4Gd-w_ZJe<J,B_06<NE!|s.ZalS/wLVuB2,}W:WVl0wg_w6TGHei7XpqT[7' );
define( 'AUTH_SALT',        'mqyG^_^H?D6ua-?[S oXvi Fv!&Wgco}:/B%MZdpo,;Mqe[|mQX9YqxL:jKE]N)@' );
define( 'SECURE_AUTH_SALT', 'W31rc,oz;R3zzZ_x>/m^v(eTg5RYOb|Fy9F(`v8>~?idquDV>iq-ca4m5`lu.LeY' );
define( 'LOGGED_IN_SALT',   'LtOWPOxzPyE@:|*/fO!G@7@N`u%Au(>4roYi5OxWed^0Jf~JIqJ-cpF)TP_j49W[' );
define( 'NONCE_SALT',       '(~Hxq1Ny|$.~IS4Q$ZD^F+t9x&GU%hSb+(h!7Xq}9UWoj!|jyx0 .j#7Hc]Q MvF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

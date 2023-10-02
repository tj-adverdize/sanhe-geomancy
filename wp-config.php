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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sanhe-geomancy' );

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
define( 'AUTH_KEY',         'Z T4Mrw[G%xft5#nn1]oEJ]KE$p98[=Vl)@p|:nZ%iom@N0X-J@>jn>FDDuafmPX' );
define( 'SECURE_AUTH_KEY',  'xk,t*`eHiXw])x:/j5 !#/:+q+jG:^[]JWI%(J,lCEwpEp&xl6(Kuvve2q`gyE9`' );
define( 'LOGGED_IN_KEY',    'mk28yHn+1},HAa~EV0~Yp+P/L|RMRp<ed.nj*ymN0]iL6!j4*yNZS|7e0)m?FZl*' );
define( 'NONCE_KEY',        '-<lj*sg>sINr?h;foV3JDh9Rsv=@L{ZCZEXUUbRZYEGN[z<pE45b=Q|?{uV5,F^{' );
define( 'AUTH_SALT',        '.DS3}k^Ug7yg?Dsc<mA7g-NT9$3AF7&0Hnc-T-`cW}9VkS6Pki,g><[f]OsIGT`4' );
define( 'SECURE_AUTH_SALT', 'xrvtw&A?iWmsGQSL4?H$pE$_B~wjBo,wou@/ZfJ M[2YTmOK@{TQ+zBkg,Z`ef64' );
define( 'LOGGED_IN_SALT',   ',:Q1m[~0Q:620i97<JH%oP+Wct` S=n{)ae)BH?r(%aI>FYg M)fq+M,&&qv/h>4' );
define( 'NONCE_SALT',       'jY/E.*k^E0>Um=gB, @8=~{!p?-6Mn}AcdAiSqc^-;&`??qNnhIPw_Z{o^*r4@E`' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

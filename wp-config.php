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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '_=h%;t!S>-sQ`,H%2_&)8i4>@l<oP5@AHQ_SQ.njFb[a#f$ _ZZVv7Dh/n@`(Ao1' );
define( 'SECURE_AUTH_KEY',  ',1vEuDZW@+Y.Y_Osi)3s^<4NY[?`CX_8)]LbJhnPhfDb:xYu!*PI!L:)w.RU~j!|' );
define( 'LOGGED_IN_KEY',    'X[4TXV8%,MxuoQ({i8l/0M_rJ#e(zHw-g.Z;1,{2`mkvM^j!Y$rA#..l[WR;}6>3' );
define( 'NONCE_KEY',        '52zep^Zy$kgsuM%do4,rh7<-G%YQ2zv&|XWnNn9X_wRmVl2|-F|M&]zLy,j4j+` ' );
define( 'AUTH_SALT',        '$B||M+sB#% N3^:d_MVIrw}CFS-$@64:)99F}:,t3ui#8j|a!6:Ag.B ;FkEq4G:' );
define( 'SECURE_AUTH_SALT', '2k`MPTcXj0kg5OvAy&A>-Mq[X^&1.,l?b!+,sUR{U7s]?g6YLsVAkxV;Q]4nU<kZ' );
define( 'LOGGED_IN_SALT',   '}d(HZ{*`r1MfS9J($uK<qp&@sSa*]`i(qNJ:,%j}%c->pNN(Z+?XPq1*4Hc30cuy' );
define( 'NONCE_SALT',       '3QiQE@k&Y:GW6PbI%Csd)O#&cCT.mz_&CA9BQo4D94/J{mY%S8]]bY(Jg9RY&/=i' );

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

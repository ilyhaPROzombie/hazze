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
define( 'DB_NAME', "u3657944_default" );

/** Database username */
define( 'DB_USER', "u3657944_default" );

/** Database password */
define( 'DB_PASSWORD', "6q0BmqUQxZL1ajy7" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '&M/Gb-~FqO}_j.!^Imde?&PS7h:yW}<Soqk&9cLI~:^+.RK,XS8wzqT3=~16W>4[' );
define( 'SECURE_AUTH_KEY',  'f!>5Zm[bHh4w1qqP(J}NdDGvpFe5/ey,U.KYks YE0C>9o_5XXfI|63KpY79k{=4' );
define( 'LOGGED_IN_KEY',    'MZ(I|0y_J+mRV_tliP3tqj{r2qqb1V^8o()Q/>ygSg&dEb#E[OH:rY[D2M1G@J-g' );
define( 'NONCE_KEY',        ')>O${B-^@r@]_]kJk*_hs0h:}K)q(7K2f!3/q)XiYz;vp9nZY/vdCO(!z}!SV|V?' );
define( 'AUTH_SALT',        'a>MH(m}CkwZD5>F<8]t)0=BgZZo<FqwF6eD9eHU~gL/e^XTO.uL5BdZK-1!S36^{' );
define( 'SECURE_AUTH_SALT', ' 9Q;~#JaaQ#~Fum<X7CG Aykg4y+2-pBwbl<iEGz?BDcJHC,~6Pl+Qx3sxi@Pk`>' );
define( 'LOGGED_IN_SALT',   'm]@1#k/?KZp<M0k>o.LEC,O!s.[TRc#f8}G5qbiB!59~W58];(7fHoNI$H<+4p%R' );
define( 'NONCE_SALT',       'M6MGP,+l9O:`Rl]=w15*Oz]1VK6UN?LYL`p6D VB91Z`y_[YL5<WJI5PEu*UOw)T' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */


define( 'DUPLICATOR_AUTH_KEY', 'l]4rpl~/4}mT:NN5V{lHc.SaxE|S-SKm}(!Lo3Poue6F$Co @9W)A?k!+EZlY4~E' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

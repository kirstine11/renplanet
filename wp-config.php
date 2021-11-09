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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kirstinekrogs_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'kirstinekrogs_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tkfF35ezRH2w' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql107.unoeuro.com' );

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
define( 'AUTH_KEY',         '|I]CCz+o|G&oAdt5s)Ho!:(tAR/7BGGx.rJ{`b#8~ebR55PUQ:Q9.p8x`]v+k-~d' );
define( 'SECURE_AUTH_KEY',  'V@u9U hw,rWVQi(} {A>f/@n)rG_h3w6}ZhEqu_G-?y/^`2.fUsV[[7uAuN,GDZm' );
define( 'LOGGED_IN_KEY',    '<D]mY|_u^5R[85yY[w{=4,Wy^XL=xc+7&>RI$iX1f5tB0C+W#D{N}x6rs.B~ETro' );
define( 'NONCE_KEY',        'CTw`T:^Gh&Hn@!|rlvzv,-$%tXkTUW$o`hZjf}]Jyp[C5|XU?bi%Z<X2akV[*y7!' );
define( 'AUTH_SALT',        'JUzc4Ha^m,nO0#G]IQQBP!&K^h$OH[>4kRZM0wG9,?wVLPm3u^-$naeVApPX3|YR' );
define( 'SECURE_AUTH_SALT', 'L6d.wSmRRP4#]:8.{#Nco$3g%m;m|)~`DG`[B$9-fml{w+~8$7.pt-:C!k6kPB/i' );
define( 'LOGGED_IN_SALT',   '{,`:mlOT/lIGYG>^Q54/pszybYf}=ZI;D]!OeV,CxGh=9GH52Zb,}ZLb8xP^6*nP' );
define( 'NONCE_SALT',       'JdKV2dPz?1$Q*YH1Klgk/?f*(B6{.#gs4DG3+X6RL[O8U ~0j-KM]se=a3J_x+H5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_renplanet';

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

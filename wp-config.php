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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'uD; c`!m@/5b[;iB%+sc uXn_%w|L`s1SIYdasbh1iwO89tS.d+6)uC.7+I-eM8W' );
define( 'SECURE_AUTH_KEY',  '`j^!tzJVL/ o>B6@?`g:tvtXUX!E}F^I[<#ND/o<7M>w2 Yp#,[-hRpXvrz)b^QT' );
define( 'LOGGED_IN_KEY',    'zJ}M):*p65$}a-)=MyRR~[6P)%<u,6ckOOukhaV?`9!t)9yO;JmV.kWOh/CdDz}*' );
define( 'NONCE_KEY',        'G0X/DZz|vb,3Z=|R0q_v=6kGb)0VUNy!C916s)X6qK<uh-0Z7!JrvA]R,`gZ+%4J' );
define( 'AUTH_SALT',        '}Y^ga4x}j>c[p%a+utQR!<Z^>])*G<?v>,Mz+0Qb[[M ~#rzV$]aL%uo,8qR]Ago' );
define( 'SECURE_AUTH_SALT', 'u1 O_JD.HQHw&X(dnF(El$6AfD-Cqk94y9WMq fDI;F!517=:fiILd Avxg*mAi>' );
define( 'LOGGED_IN_SALT',   'u}rc8&LDVNGC0JIMi(z-`@CW}wjqSjmD%v1%vA*3LiB$xTSsk.t<I k ?<.x~^gw' );
define( 'NONCE_SALT',       '=;o~Y&lX*gmBomDpYnOzIzHb_G8hr9/p#W1Gx7.d9Ulql+PDcCCePV>y|*P_= zz' );

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

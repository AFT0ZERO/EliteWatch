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
define( 'DB_NAME', 'eliteWatch' );

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
define( 'AUTH_KEY',         'vAm6Kx0KcMVqKB%1Cx)2tD!i=XP*$cVHU8a:I*l|57x}5|%&Nokn6+ai/s)+{T1C' );
define( 'SECURE_AUTH_KEY',  '1B QFNt}*+%Ks?K=+`=fgS]m]/w$hJ~H!h)-I#:gMXSt1#y2w`@][>|P7O2 #HpM' );
define( 'LOGGED_IN_KEY',    'DOT-7&P%0$S<|TWi(6>s<+^/rC4c47vL#5k(90-VPfH$,)9R30q$Qy_?!i-,X_Zz' );
define( 'NONCE_KEY',        '~?j:q^:`:4yK7>9lP_f  Y$2gN/JqO$j]SVrO?(6$c@(Jbp[Lfz|>E13gS16;cz0' );
define( 'AUTH_SALT',        ']AK=aHwT=HK>qk1b>G(Qwpp]%@Ser}f,,7;SPD`xI&TN52^@{.jTL@Ln5xVfWPcx' );
define( 'SECURE_AUTH_SALT', '^%IW07;0Ibc_]@<4l=xU1An.G;X]7wh3#v4c!h3t~suk5S*+RBwNw^pL/Hr4*$DK' );
define( 'LOGGED_IN_SALT',   'zsqr=<j8K0r<>0(LN]O~4Wo<>l+hw75d_&od|mz-0b:YQ[NLNE6MbD0N=XekSS>M' );
define( 'NONCE_SALT',       'p|77bz0KoGZ-vl|T7EbECXl<s556?3N|QUd`U*A?dDhYz_^EFrDWNoknT}>>c;(~' );

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

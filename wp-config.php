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
define( 'DB_NAME', 'nij69_db' );

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
define( 'AUTH_KEY',         '~e//Cf*::X6?e063SBc^HGJ/F7&sLYG=-y!g^~}q0djH)b6Y7Ri9ujJz=CDZiw1!' );
define( 'SECURE_AUTH_KEY',  'p:EMV_,)nN:B17eQOdT4sCxrc&1@G0:?#BK6Wf`;E_f5jCl(E)Pn=cg#=tKQFt/Q' );
define( 'LOGGED_IN_KEY',    'V2xYjdc~pUmv.A]>Ei*`tG?so;X{3+1bH6ma&H13+parY/L_N$0I>9vWPn8AG_n?' );
define( 'NONCE_KEY',        ':Z[$^mOaVol2>:h;uqD:Q:ZHpX2O#+%cu7R!J%` >JXlT1joRFfv#n@-?x/j/2~,' );
define( 'AUTH_SALT',        '<xl[yF3f#Al>r3}!r<<-PYXNCF!(KCHH:e.nmfn^!WkUU8erRd22w,?Hyu9T;%e-' );
define( 'SECURE_AUTH_SALT', 't~/6 <jP6.=SC@9X*1#+Z9)SHDdiK|sq6;<B*Xb1$kX`B}dr,0!nLiM/UYA#&k*[' );
define( 'LOGGED_IN_SALT',   'Izg|V0 Gs@5{M1#*hyg{@rc<pvv0mwJQSO){k/_z>@%y ZjBRPEQ0xY)A1w(}L=]' );
define( 'NONCE_SALT',       'K:CcL.V1M9HYWiCgc;:A8Tlo8w{/334ix0cc U4shv`3]<p=rr+)P-UKCcL-&0XU' );

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

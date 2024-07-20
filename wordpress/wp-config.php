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
define( 'DB_NAME', 'simpledb_9uxh' );

/** Database username */
define( 'DB_USER', 'pguser' );

/** Database password */
define( 'DB_PASSWORD', 'tbgO1HbRY6p3nXTgepa5lsG0aFO4qtDR' );

/** Database hostname */
define( 'DB_HOST', 'dpg-cqe19s08fa8c73duia4g-a' );

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
define( 'AUTH_KEY',         'QVRS$2`)E`m36,:T-OfH0wHQkufc42UZ%|G:37Gi~{+otGI%/89MM@P.oSvxVs]2' );
define( 'SECURE_AUTH_KEY',  'L7Gj$(j[+GM6*dXUHSNh0AjiQ%R8=N.ZGzo<>A?pcbHG7c;lYwCM2Mi!zbt):O(Y' );
define( 'LOGGED_IN_KEY',    'ht<olCIb=[qG/0R[HI/e(NR!~J{MCMnN2RGhjSJgD%6;bpjguO8CqWVhNpct!UVf' );
define( 'NONCE_KEY',        'D(ZpUDD5Dm5dd:2cwqKCqCYtaiSY=knbL =W}(QSB/7tk_-B*Wi}^)5VCWdNNDN~' );
define( 'AUTH_SALT',        'V>?x6)4>l67!u+jcB2{znMhv$u;+w<ABN64k*:sBEh5d_UxO~w_os,1ym1>Vjxad' );
define( 'SECURE_AUTH_SALT', 'YQE!@0<Qa0/,{eo1x2xHYa_jR0T&0=V) )<x27{j}QRQ*G:.ierZ?+ug[i 3%I32' );
define( 'LOGGED_IN_SALT',   'geq|x|UEYO]?8C6].F(<E >wZ`>&L}UH/K3e<w|a Pn nZYHh$GIRRKlgS2o_zSn' );
define( 'NONCE_SALT',       '*)1>W7!fdT]F(##3ZC2[~x_yFw(2GK0?JD&OJhO|<dgP[2d)Vf{Pn~@+j=Ga^VH^' );

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

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
define( 'DB_NAME', 'wordpress-themas' );

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
define( 'AUTH_KEY',         'GyTqflE1MFagBW(FhB rK>V[kBW{t+P{-uyx(Ar`KT^{Z6sn#{ETX3|MkaVfK`qX' );
define( 'SECURE_AUTH_KEY',  '-!fa[`w{1?[(9 H=/(f @(H_#94Xq!VsP2sUgaZ^FMex&~=)7m?EnMMjI7z}-]81' );
define( 'LOGGED_IN_KEY',    'J.TOW<?#}A-hgG+-b]aE` 7c7m(2@Z:HqgxUNE/# {,1yYQIr@5eDfoQV%8mP:CA' );
define( 'NONCE_KEY',        '_YP[)<Ci/WiVi!l04t%h4PnIlqE}C0-> YiwG<>05acM!,;7K]Z<AMn9[V10nTly' );
define( 'AUTH_SALT',        'Nr|LNbPioM>Jg~)FR=).Y1</ },rWP,#|n>e$Qok^[3v1l/-B+uI<B&[3V0fTlsG' );
define( 'SECURE_AUTH_SALT', 'Bde.#^UQfYp]%ds%+O~ wY??eT/v(t.hX2FcI@D}d/^dbacT_@cmLkY{wUxcHf|6' );
define( 'LOGGED_IN_SALT',   'w|L_;/4c++0q`SxqUh@]FRWaEV:l6+,s|<k`!r8GN%bt|iTpzC+0?t%k8CJm8ypa' );
define( 'NONCE_SALT',       '~yjzlcu8eJFF[BE(d>X%aDiR]SD3DgzF|@B^qp~2f3S^kh<ZIb@Q$,,>8^.`n>Rp' );

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

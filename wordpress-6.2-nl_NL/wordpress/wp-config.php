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
define( 'AUTH_KEY',         '_r[7}I`C.*H+5O7YFNTJ.;5;Q%L$7:Ug0NVf_vr|-t<^P&E@Pmq1FL?;x&{Mg>;A' );
define( 'SECURE_AUTH_KEY',  ']w[J4@$4O_N3r,SXRSat*zKJ!2MZz%1[P|?Q3[&sf==%MBEJxkB~D2ScU^^v 0bF' );
define( 'LOGGED_IN_KEY',    ']lPTP*RQf<ri<zEAY,>v@T(fkX[%M?t/-n}8CN^{Ahw7>Q[G*XxgiqZ#X2Gx,?k&' );
define( 'NONCE_KEY',        'b%C^Bb+O([@yLvBUv>Tg>~XEd./Lc A^GujX1@fo|k_sqm*UqO7n_{=iL&(V{3MT' );
define( 'AUTH_SALT',        'E2gN!vY!Tm})j4SB8O6r.]IA,mhtbxM}#Jc!rrp&nfw(<SIB:tABsrzy4EqqwCWX' );
define( 'SECURE_AUTH_SALT', '{>_.uz1r2?0R*%7rw|@RO9@(cKcHgU[:f/G#897lh=OEQu7jh1_8YvBB9T72nr+c' );
define( 'LOGGED_IN_SALT',   '9Jg?LWMtQnWT|(n@h]2Ix0Y;u;&3f70s;VA&<:C4]^76Vf9K UJ8Sw1#kSZ-1y<Y' );
define( 'NONCE_SALT',       '83bF}&VaZd]FOe T86u*}7m|gHM1q{%nWaCT.3?.?]ojLR~c)?7h4L0n#l=ge<2h' );

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

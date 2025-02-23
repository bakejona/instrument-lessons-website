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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '3r4,`n~/4&yrOvU)A|WWdS/Gq@-1|I)V9G-E>J*6uv]HT i_[Knyhh$<*upVro!8' );
define( 'SECURE_AUTH_KEY',   '6hvv@x}9g^.&M:!qKd1`}Syr0Bynrc6*GdYztGljH~B-i06_+wU-(jryDx#l,l_S' );
define( 'LOGGED_IN_KEY',     '<:yg<c#N8D(#DQ^z!C3}(Jv0@*2^ZEQ&NGo`nMdmW,FShH84*+~*h5/8bRO&p(A#' );
define( 'NONCE_KEY',         'M].th9=o.*SD!ut;<Ay}a>Hw3eWQ&7DZ.VsFn/$)zw&AZ8*x9d$5fn<>l(*_}Y:e' );
define( 'AUTH_SALT',         'pvxWUhw~{lP`yq<K Z^j14S4x_-)3:m 9-z8dV^Nj%X@h549z|SfG=7j<}.7~e~p' );
define( 'SECURE_AUTH_SALT',  'vUaY>DWUh9cHpWV&(aBle&S*Fma=Cg15+ orm=q*ar[p@?H usv5kd)ew;JY@sVE' );
define( 'LOGGED_IN_SALT',    '^_abC+}1qs,?e} 9DTkj,q6`Rkt[wQU+c fgl#T[fWp2$e=kWF3t`pe9Yx^wXk1o' );
define( 'NONCE_SALT',        'g}yzIc(`8KTcSqmtd,0<rOrmk2ZP`9R2CAaPLnWhC ol=]1]`gl psry:z9Qg!%{' );
define( 'WP_CACHE_KEY_SALT', '@^dFChSZ1{&MMi`!z<hS@u(XyrwqxkKF@5nv%i`MF.|ND-HwsGw/~Jm(d){%-E~2' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

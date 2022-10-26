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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'creative_wp' );

/** Database username */
define( 'DB_USER', 'shekh' );

/** Database password */
define( 'DB_PASSWORD', 'shekh1234' );

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
define( 'AUTH_KEY',         ':3*0upM7TMvH9+/F +,cD$C{!1jLUw!9e+T:F_n5P8oC@]d?!lOa6vnUVC t%ts(' );
define( 'SECURE_AUTH_KEY',  'AD]c6C_wQdrF7V,HzUB($iWF]?0^9id-Pufsv8j[d~p{94;5h!y%QchG/C,ij4Y3' );
define( 'LOGGED_IN_KEY',    'U&`Axue:N&gDn#)&y_PoW-Bbdh;4xt0#E&E2H ysCckZ{NGm+~Wa]SCR(pBn{^f9' );
define( 'NONCE_KEY',        '@5Zz-fN>YaYqxmI>RL6?dj15lG3tKB:5*%GFY~]g*ky #RH<^9wKt_dzJc)D6*<T' );
define( 'AUTH_SALT',        'bH/%I>|6k+7umFHV!hfX6<JFp(q%/WLg;FWzhqL%t*d)]MWFk*)DRMN!@-mxw~M(' );
define( 'SECURE_AUTH_SALT', 'nZ7Z#V5H,%)yrhdG57!P0B*YE7n8$/vj>%kF_PHz?[Q M|viG2?BqhWQcBB1}eD/' );
define( 'LOGGED_IN_SALT',   'a6C71taPv+Rq;jBo&)Z$a@YeuV&eUG5g4@LEZ#lme8bG9.}U1ajX-@,u{up+zmI3' );
define( 'NONCE_SALT',       'o -T.5$~Uywk*:sB#c<4hx(A1N@xz {<D69E[bBA]A< cQf[p95M~PA7l Y0qx}T' );

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

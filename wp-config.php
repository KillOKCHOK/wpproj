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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         ']xh`5pPMy?#]z<[=>U_5F&7Zw(?|:~mdBB,JUo,X} .+Ey8*4E7`HyzM5 eaRW@:' );
define( 'SECURE_AUTH_KEY',  '+>o1tv#-zrttWNX>RY#@mCpUX5f@lf6~Q`,|H+nOF>C:P$#Ru$Z/`+?wvMP8AWL4' );
define( 'LOGGED_IN_KEY',    '>I2^hDq2:B{`&fFoE,+tWKOqobAs0Lvr Vy)t@&Nz9 %>*naxwdum}$(+j{$aS`*' );
define( 'NONCE_KEY',        'JJlQ-gBIDqxXHV~D+DvW2=J5j(|j:S9]({hin@0,<t$T,Z,o:[SZId/:KPNO|va)' );
define( 'AUTH_SALT',        'ek=B)dN_/`H>swXtJx]FBLi!9c*Q<_LG(=v(7-Xef1wXDBrhaigpV4.PEUk&a~~^' );
define( 'SECURE_AUTH_SALT', 'qC`mHD;(#JA_{g;.LX%K/(bUhjoxa7C[=; _|qNvqO]bOUcOFgUr`R,Q^dt6w%^N' );
define( 'LOGGED_IN_SALT',   '|l8TUwd]TQ5F=KY{uk,)D*e2frLyA/v[7vJy$?N>=7 5$:1%G/Y%7V+d!zLI%+sK' );
define( 'NONCE_SALT',       '?25}Ucl$!;.9h:XEny?y|tN7iamErd5t8@h}&-Yq)U9-`pvg`#do><v6*B9FKS s' );

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

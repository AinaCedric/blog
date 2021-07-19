<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Yp<3`VP_Gqx2ojq~&=W=kogWnEf|zv[KR{Y3Fgh;/OYK<_ie0<k2+9&eSTkQBFsP' );
define( 'SECURE_AUTH_KEY',  'yP2uix#eEE=dy1Q7BO({p86HLJiw5Hu.1O_wMR/3GfT%M39dl4CUdkdlY;gyH7G@' );
define( 'LOGGED_IN_KEY',    '3EMf0<p=P[DY|C8lYDPp1fXwIiH,M%Vcn`V91m Q,QkNcLMI6y qL3|7bO.!c*0e' );
define( 'NONCE_KEY',        'h!>E]c!o);&QDCtj{pMJJ~C*QQ]xaFU.Sj}Z2+r/g,c47/DMuHsz:V17(G:Y0eG`' );
define( 'AUTH_SALT',        'u$/9Cq%Rhi8d7,l< Hm8#m*<~SF%ffA7qP4iFdB&HCKW|gNk8`|(_$+79t]?@l)h' );
define( 'SECURE_AUTH_SALT', '^:?RVfg: :aiX`m+=ZhJS;fyiY*/Z%8ER.2k7APw(w:X#txal1#a1RVYx1DbnEb-' );
define( 'LOGGED_IN_SALT',   'DrKCf^f>vM<4oS9w*v,%rwwGiA.?S{%!B-ZguTp4~${sfvTW145)ch[l<iI1,J]F' );
define( 'NONCE_SALT',       'K|Ii0}{v}ztcfkq|fZ^,8h-=CYh8[,3DvS/=ceN`[;8aEMcq/]H{@*:Ufg$${9:6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

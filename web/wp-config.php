<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cissaorg_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'cissasisters');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vk@wJ||+mFwCqcN(LStShm*<-O`^TjcTMwTjFk8eWOvp{lsVSqM9nv5^#<g|Xog:');
define('SECURE_AUTH_KEY',  'XBvx9A M<P[]o#SO-*dY~0MyhRnv+jgy+ZM7H;1jj^t-Sy].wtDlY[X;o0h+);Y^');
define('LOGGED_IN_KEY',    'jH6-b%%UkyyMGd8=03`7^X1l5>;`c1h|(t0ko#<cNRdUpoA,6|G]kPE={(27xi)O');
define('NONCE_KEY',        '+@cY*wG2ksG~ZjaE?)|ZhO,yJcPH0Hyq2V5tn2IrVV7i*j(4nR8TNbde?ni:`.p|');
define('AUTH_SALT',        'B.fo$F{0gu~aV%c-4Xsvd?PMeJ iF[gbMc?-:e)W3tb =~n^[{t!a0czzV:pv*]*');
define('SECURE_AUTH_SALT', 'v+s>,XSg@nY&0pxdg/>BYGyBXkD}i$o9zJ3Z) g9:)]DN6iGmr|7* b=rd><K}{s');
define('LOGGED_IN_SALT',   'ZWFL1|g2QV-HP+q{ b)L^>m[|,pCuqA^%(+?nFd]w{Q?E;jC4[%gM7kr~nQDg>X#');
define('NONCE_SALT',       'OQZ+p6y+8WBhWP5?``ADsg;|x[I{|<G%GQ|L,y-T8c0J;oeNB=mw`l1Fh!_^zO-~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');

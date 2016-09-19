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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'latin1');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'latin1_swedish_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}TquL8g6Af ]$Ti@|Fap/~T=k%R{_%Oq1p4=V.{s/5]$YperR|mqe/^FzSGoax!}');
define('SECURE_AUTH_KEY',  'xdF&jpfuWH<C:QU5(;5:2q*gY%Itg<=+d(#,=[85kbxbiFrA0N!i7BS^ 2vm0`-Z');
define('LOGGED_IN_KEY',    'E4D[!&p&Dw^`IY9N.pL0A4dFKJNB!-t+$16rPq(NcOrN|*U l!cHEj.A02g-PP$@');
define('NONCE_KEY',        '_;*$YJ;r{|]wBwsGe.~}|hvL,9+ wVa!{Am4 1^}wQ66dBKj,Ce$S2RR~.[$s4,W');
define('AUTH_SALT',        'o~I0U`(T*q.NWJlP7eT56QsVB%quV/4[aFrEqRV5m?`RI*+O^Raui.C9K6,P83SO');
define('SECURE_AUTH_SALT', 'B?_V(@mUF~I_i)pk_ZwCJ9kNAs)0>`HPcb`x=wfQSy.Eb?v?`9$=jJIzF]=u;4h{');
define('LOGGED_IN_SALT',   '!PmU_^p$X:q#%j}gC0L1l~;s>YG(PpK?lvv&[|*CC1bQ+sn3S7uGpm0::&B/;:so');
define('NONCE_SALT',       'r=^zW):SjO7*!/ShL2uAIcZQ|ZCh[a itHiCfAJoM{a-gR)kYM-+L+7ixbhR%IXv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* PHP Memory for Alibaba Cloud */
define( 'WP_MEMORY_LIMIT', '32' );
define( 'WP_MAX_MEMORY_LIMIT', '64' );

/* Custom Tags */
#define( 'CUSTOM_TAGS', true );
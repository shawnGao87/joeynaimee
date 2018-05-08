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
define('DB_NAME', 'joey');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'Shawn19871226');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '_g~ b=%cNcFgz^Q i&FLwHxiqzFuSC5+WC|(h9xrJ?X)eyx=SF3@m{!QZ=js)cpF');
define('SECURE_AUTH_KEY',  'hg{P$loG7GHc_Esr^Z?a:Z%Zp4%QfopwBn%RMJ<Qj_b WpRzi}Z^S&|oCeJ!6my$');
define('LOGGED_IN_KEY',    '_MHuj|G6KwnD7P#:MR!iE=OOC)q~8iq|8vVDGUI|pwIY[?B&fId#`pns7I&g~~t6');
define('NONCE_KEY',        '2T(ve+|og0Id?:=M=](W;[xry!SYtY5^R>A;_):npjS14`N_;2 r>qKM1`dgt-6?');
define('AUTH_SALT',        '6mQ>Esu@!.[RdOUkt.i?K>bIrKXm&<LrP*cGV[d;`KIT>8*0}]ec&:fm{n8HgX}T');
define('SECURE_AUTH_SALT', 'ESN=6`5B1Bx9YA~A~>nrbWkD+~P94=Jc&mW3QU/A;V&;`eE:0-oHl-VDDV/{ )dW');
define('LOGGED_IN_SALT',   '-3/dFk,v`A07q=f-OFOO<eQ1za4@3] YBZ]k8Y U_fy@N#Hv:D>y.P^Zy_>1$7Ln');
define('NONCE_SALT',       'EX~$/GYPc:Pha.,@.1x~}Wq+R2g=oMW36oG`66 4W`]EL]%H)kd:{Z+D290yB6.k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'am_';

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

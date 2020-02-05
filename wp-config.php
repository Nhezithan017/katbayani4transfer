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
define('DB_NAME', 'katbayani');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'rF5>ZzRMHlu9Lhp!1;$eb0+,_><~LPl--1-yqJSB1l@0]ljokB8P %Y8!OaO,M@c');
define('SECURE_AUTH_KEY',  'iuB3,Z17m?{2a4$V[/>PCTyRVde9X:g]r)Lo,<Pq+3(HFz-yjX4j$Z&7l#F#9ezK');
define('LOGGED_IN_KEY',    'Q#HwyT[ho7vA7PDL<Da:;jq%QzP5#L=ZbqAJ/9%qYT)_*;|byr4{AdMBnu0pNKF?');
define('NONCE_KEY',        '`;=0G74Dv5Fh.s?>*3F;7?Qe{MQIM:pmx<rn<JFM6IY-rDPGGN>rlbX,$tf$/!<`');
define('AUTH_SALT',        'XbuH|dtnULDHC!18ZEE14CJj[o9PsBw@3zLD0,q#]*0o>=k.8=9.CC{IGR!Z0k-?');
define('SECURE_AUTH_SALT', '[*%qWp+ow(8VR;T~fOs/Ab+!oPw73=l)U3TQ#`.x2vK`%Uwc4kWWEY$b;^eYsj@B');
define('LOGGED_IN_SALT',   'alu QkzyhokObr5.R j,;bS^!o 5ajAuF;<Jey-32H)d~gjk8cj_w[{dNY.+{-8)');
define('NONCE_SALT',       'V|)JbTE`v/tK3<bSPWCq^}=:M}sB=fyBe4=mH>L_{]J$K9%*fqf.N`!x-t5QRy0e');

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

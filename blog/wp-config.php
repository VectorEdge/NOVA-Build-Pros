<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'novabuildpros_com');

/** MySQL database username */
define('DB_USER', 'novabuildproscom');

/** MySQL database password */
define('DB_PASSWORD', 'DnFG6Xne');

/** MySQL hostname */
define('DB_HOST', 'mysql.novabuildpros.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'P@4WhdhcERRg#DOZH:6NqLIg)iiO%j*;L?CFYZ8@jx"+E"rB*cJvKWlLy65+#9T)');
define('SECURE_AUTH_KEY',  'a_E!!t95jXfA+3K5HMkx`$f7u5cT9hb2VZQaw+*x0o~~DHnte/D;1*B|o@I6G%;~');
define('LOGGED_IN_KEY',    'bZ+^@BitmWGs3Kp0PYrR9enE0;`+L/5CizxsC#lF)yIU4R`)5mWd?"to@`zrgAyN');
define('NONCE_KEY',        'uN~q)QF9`|(M`A9X!jUK*E3BHy9lYop;Cw`L@1$q?KwXukOqP9/AmJyRRe~+ZCb9');
define('AUTH_SALT',        'ww:OSm2ijZPtA*dAlSg"0FSPYjBa4W%7O/@QTyrsLbIGluZ4#jtRA3jg+dpFReDv');
define('SECURE_AUTH_SALT', 'RJFmVss~32CT1|QC8C5_u1z(HM~8y8YXDwM?)J~_|8CJl|KQk%w(6ZK#!#~fDp#9');
define('LOGGED_IN_SALT',   'l5;1rJ0DM"YbWfOIX"#ln$pE#B0&@!mrc)``_39G4zbsR*k~VRgpbMZfkA#q!jsD');
define('NONCE_SALT',       '2p5R8"kzyqb!4ieT*16;~Knj(6`l$4oDl+~~bu/W0iVUx+x;?Xt@hyt&N8X^S;DA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_xjxmzy_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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


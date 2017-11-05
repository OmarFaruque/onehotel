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
define('DB_NAME', 'aboutdha_one_hotel');

/** MySQL database username */
define('DB_USER', 'aboutdha_one_hot');

/** MySQL database password */
define('DB_PASSWORD', '?H4oF-yH8WOX');

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
define('AUTH_KEY', 'kaG=][!TrWjfWw+44|IKI}8D#uUmb+:|s|6qs+1BwX@8%]_:i_i);QvF@}GuoQ?P');
define('SECURE_AUTH_KEY', 'n{A|pJ_9JJ2`EJNDYAL_yxO1wL[-t3((-fQ[4j&fHR`8KJ26s,!{|O.TG^f>f,o1');
define('LOGGED_IN_KEY', 'A&#.qmjMimrj>+*!yC-m7l{M;?zVq4g/SM;CPB jx+AMCSBjZwEKA:qJz_Af:3vP');
define('NONCE_KEY', 'WUE)yn4o|xCarn1gh;RZ:N @|vh9s(96=j20l||Xqje(WV8,{+3FSKHuS-KWhVqf');
define('AUTH_SALT', '-47!~]w+]-L5C/l60VO9{G|Qi<6P#BSt)h8Cd:%>U={WD8gptt!{2KsnpIch-r~L');
define('SECURE_AUTH_SALT', '1da+rX8V~P;-+p1EWbI;|/;F3Sna5a-h0D=W@.Z/|t{+;-9fA2()[+fW,+-WPfXK');
define('LOGGED_IN_SALT', 'rkg#|-(OSeH:[|G-Xi{lPw93MP0:R|jzxRbKu-(U:h$p0^g(ao<zA,-L|J1Y8k-M');
define('NONCE_SALT', '&!18|gSF=Eb=+oOvMEg^(W?#|WBRRn4XcCz,=ybasbEA-{h1e^HBU+W,r^S<AILu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'one_';

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
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

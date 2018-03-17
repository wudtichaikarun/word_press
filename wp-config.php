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
define('DB_NAME', 'word_press');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         '%>FD&qNn*ei4>xhcWj{M[$OdA24id6w)+ %~X8yQa%JuxXo5KTg{*#-YqkfnLbMT');
define('SECURE_AUTH_KEY',  'wF-y23DS-uDg|m|dQ Me:wOxW(}KJn!,{bF/fdp^ftbg|FWW@|Wf#$rt,-vzUE% ');
define('LOGGED_IN_KEY',    '%h`Vr0t+`[s[3XH]Mm){WI*_WSch]1YVX@]hrGd~UzE:#<k[KK7R)h(jx=//1YG[');
define('NONCE_KEY',        'WV]Vt!aJeFd@@0|3|-[[je0gK:a!!pk>P%.K=n@pU4;03X#n}rAy>xi9D7zWKN(7');
define('AUTH_SALT',        'tuE-N(5EXjd;zF1is8#1h7Hqx@h+?Sz;-}p9yMgmy{r8ZDf=R^Eh2[R8R&KU!xl}');
define('SECURE_AUTH_SALT', 'N+IH_.:<@6]F1j*,#.:-6BP>~Kex[fdtVjO#XM/]&05Gl.AkP +v%URcrx`|<v z');
define('LOGGED_IN_SALT',   '_^U$k_^t-F#~+Zy0~:)B=OGE+&)IlbM53r:&b!-Lfg!$viN&ZD,lX4?;-O.5?%N|');
define('NONCE_SALT',       'Mu.]I*_26Q5z_J]*+0xcC!]3}+v5]1[#h#im`PnSij}|qifHqM{t?^<+<7GvexDk');

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

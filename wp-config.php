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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wordpress-user');

/** MySQL database password */
define('DB_PASSWORD', 'wordpresspw');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'EIYP`cnpN=T)K[@|F$.`,Wsx~gSRbW>7|Cn&mbo16;^g+(hb4-2),.v+,f6t*Aha');
define('SECURE_AUTH_KEY',  '^pY+tsTet3levs,>K^u7Wy1iDzpr/=rXQ$-Q7ji[z^b-aLQ_Xb$}S3w-XM`|T._c');
define('LOGGED_IN_KEY',    '})Plkn>e}F=ikB0R3R-rqE8~=0ro+tvaWXNU3uG9PQ;k(+MnP?>Y@T.^XV4M&!jm');
define('NONCE_KEY',        'U;X/DLU?X5hsvDU3i@57_`dK4}n@]-X<9$L{;=2:@q)SZsfIA*|D8i]8obTw#Xjb');
define('AUTH_SALT',        '-<~n4et7A [ujV7>rJx,YwCn&6lrG,$0=RVBA{0R+}gBptlLC&$S|5uXPXPS)z{n');
define('SECURE_AUTH_SALT', 'ZO6lx4>qK]A/0eNF##H56+kNK0rb,IO>B%Ne>)+aGX_d8Kgx~-isemRG([)B+_A+');
define('LOGGED_IN_SALT',   '%)Y,o&KI:NV~6D*vF+&sK=XwcYlye1iKV^XkS,3fd1pYD{Z_yNItHw5V),8rwa[E');
define('NONCE_SALT',       'VH&3|}(%+;:sBg>B-hh|wY{m~q(8g=>/q<C<x5Ng&8%7q^Ur7?#lueDi<u@?Q:~R');

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

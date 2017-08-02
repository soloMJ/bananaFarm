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
define('DB_NAME', 'treehouse');

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
define('AUTH_KEY',         'H?O}v1x@p3l|gV$`jzFP@SVpZbnKw#9t{QY}tG&k<<3%xCV:d?e2K;6<_}lE+Oo^');
define('SECURE_AUTH_KEY',  '>F7HR~t|/G7mTC}SxIsm8SeM+Eo$Xl!TiTMe`QK8+Jhdy(ml%6jx;<S+$E0yi)s:');
define('LOGGED_IN_KEY',    'g[JX~%a]-s/[6@VI|Y,k8<?|gP^Tt|UtxJFf(E7BIqE8<97:tE+mNgE(Zx@0&_.K');
define('NONCE_KEY',        ',>Z5<6y~RJjE/h*3U4_{O9,.SCmL%s{)_c/[.S8`_]Od&q9;/l0:FE|4TYeeVixf');
define('AUTH_SALT',        '4HwtM1rfOvE`k&[L4$qd0 W.~ f?/@z$d)P)n3,@|J@7{RlwsVEu~*`C)<N.l|^|');
define('SECURE_AUTH_SALT', ']R7-qyPTC:Gwk!iT6zZu+ToD?l3^QJz:9|tfUB.~,f.LVHvQ*$T)d%fg8)u}f9rm');
define('LOGGED_IN_SALT',   'N~:`PcSUMI(X?un=X6VJ5BS<I>hO#0ihdmK;YnuhagV 9|b:QyQ#$@Ah)4Y:_9*9');
define('NONCE_SALT',       'X7[ARFv>{1O98ape=eNLV5BH4&tE4$5)IHBy}_ARZ&Y9![P^ufvkx=5|jE?b:E8k');

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

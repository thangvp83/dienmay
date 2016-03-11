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
define('DB_NAME', 'dienmay');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         '{<r h]E UBf-Laab%:]&AF#8i7hrcO=}I-;9#AJr(LQ)t<>}o),QT9P7dij+}, +');
define('SECURE_AUTH_KEY',  '/<Nrbc[v;pQ|Q`ob19-TvL6HeLAAn1%@J=0%cqq2,IqTSFLb= yP>fRw`Y|;>6V=');
define('LOGGED_IN_KEY',    'G}(+HYk]$[@FB?(qk)]aDO^6l8>.BcPZJ_^My{,+TAIpwlQb/L{-Uu|fxazt(j{K');
define('NONCE_KEY',        '9Lu@>g`Hp^o|<ykimbJ(G}.OU.;_m%?pC9M0/#3jhBKH.:S^&.cUj(4<`=/`f)``');
define('AUTH_SALT',        '`V^vpVKH]!@LnMktQ)A53RS@WGZ|e*_zNe>xogqd)|f)Xk(!5tk3Sc2Bl%Uks!<o');
define('SECURE_AUTH_SALT', 'm=BEn`oRs=p-{gKG];)E0}#-+j&QwUBRoQSVj+S3z7_1OCZ_t#tlm#*(fFMOgVfs');
define('LOGGED_IN_SALT',   '-R*g]-tONg^VsBgk1HLPrn593vxB.+|{s-3*RZL-KN||pRMaS)|9B[Kug5wI63>h');
define('NONCE_SALT',       '|Dd{-**3ZB.>pxi7yZe@V_X9nHd`%[qt15#X-+F}3$!jkX.Bx`OBGUq~vKf9|w9{');
define( 'FS_METHOD', 'direct' );

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
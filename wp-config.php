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
define('DB_NAME', 'marvelwe_zmr');

/** MySQL database username */
define('DB_USER', 'marvelwe_zmr');

/** MySQL database password */
define('DB_PASSWORD', 'Marvel@515');

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
define('AUTH_KEY',         '2d[+<)E6}&mh$M^(|/OYCPm#dAUg/Jg<rT0UaK.NEYq{J3lWke46HFbIDvK`eR$i');
define('SECURE_AUTH_KEY',  'NL;cF<Nna}e:<CB{:#ev]2 Mq0G{6h+F*!^JoM5SH[Vrz2Ls_pc-K{WU8r^}Q6C?');
define('LOGGED_IN_KEY',    'qH<me*8-l69q_gAn=AB!Md]8zvSLN)[;8z%+G-j#!9h#.k[M/nMevCh:e[v{FVW_');
define('NONCE_KEY',        ',I7Coi!4/_6GOI3[6(_$;U,<]H@~P}X:9S6m_Q|4E2?%eWM9fA H-<oo1OVV<PA-');
define('AUTH_SALT',        '`QJar@Zow)2pyV;)NDuems |~)+$<P|:naa:@-xc,}(I~IODxi~82Xxm|6R7w#|w');
define('SECURE_AUTH_SALT', '<n%[6Ao_ic/5v[R]7e`i4j;S.7pXL?N Nc=B^${$_iKS*Q28!4=)_oUZ$VKvoaxa');
define('LOGGED_IN_SALT',   ':B0B|A8n(JrfR0`.KR-Pc?6(d?#=<%dGq*@r.guSF.B53-hhCvw&DfN}Szz/c_$9');
define('NONCE_SALT',       '~xSLHwYEf&Y))<-I,+2znh8FavYr&MZc %W=B6S$TvqM:WgNIEPM2(//yhNSwPFZ');

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

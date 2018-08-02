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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'database');

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
define('AUTH_KEY',         'IJtq0jX1V{nNC /y!3]V,V9|w7`_s;`&+WroXA<W+6>PN}E] N6_BtvQ1*_d7-}p');
define('SECURE_AUTH_KEY',  'Ja61.12b88MRyXN7yui0UyRO[*k]%p+:&Id:B;`Atigdqtr}]g(`RSdFL`pLIcLl');
define('LOGGED_IN_KEY',    '6h#@Egq]e*9n}m]+ph=Ee&r(<I!;zVyMnSsu|n1` sx~ @,>opDYf(3MVe..20l%');
define('NONCE_KEY',        'iv)|V7X3&gWdNx fIBhT3vUrp!%NQR/q^lb9:,Zv({`?FkN+k-XQTn_~2MEw+?`B');
define('AUTH_SALT',        'ES98R]=XWOW9Xx(dyDu]O`JRK#dWkKAKv;5j1=bIB?eil@zN|RU#h;P1}C&qlsws');
define('SECURE_AUTH_SALT', 'k!/s_-aYGVb:o~cxL.$XJ^]h1Zn4*c9^rm{.31i;E5h`8,. zCHMR$lM)]*19@`v');
define('LOGGED_IN_SALT',   'PYUlb<|k/sHm&hnoIcy[O!,pwlotNTBI8sOh[/oO`bn0%oXg^BLO#8OCL*wn%~, ');
define('NONCE_SALT',       'KU&}yrW;$BD_We}{&l#.y%R/>ai-m#CoK)MBo**Y4kjCWU5:Qj(BwfZmH nc&2I.');

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

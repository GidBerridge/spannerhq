<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'spannerhq' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dReHjC@2`Yd*TC07Q9+RrW%rHuggaV2E+n>.eg=M(gCNi(k^7>T{kd( [xuEIx#Q' );
define( 'SECURE_AUTH_KEY',  'FYvt?.2lXm(bP&-F; *YRKoJC3qhzPq(H/Sz(ke._5N?s# [*J)A kk2.mr+6[^?' );
define( 'LOGGED_IN_KEY',    'T:f@/nhWLW2&uB5NqAMU+bw~E#hG8v{Rx74&7)>wGTi<ve[[]r@zn,08HM-Jtd&b' );
define( 'NONCE_KEY',        'bb]}JslKT&A1M]zvJ7+Cm-29^!;-Uu14/&01H3ZN<OH0DiBWoWoU>63oU7uk/uy=' );
define( 'AUTH_SALT',        'PN!^R+0H_e|.MPm`Y45>DPS%5pg0I-7f0HTQqv%ttRl+)yjA(N0fOu1DkD8ErA@c' );
define( 'SECURE_AUTH_SALT', 'BtP-k8+<^Vj,?)^f!ZOLDf#dk, Rv NFRJb(ghYF?Y#4-}oON^ q2RuEjQ<69C/L' );
define( 'LOGGED_IN_SALT',   'h@.Bc`*`]{tOsY6I[O,sG`D|jcrg5J_|HvIdPkTrq7R({D3YbJMYBgM+7u.Y(9WB' );
define( 'NONCE_SALT',       'ta}1{/11myB`JyI}IJ#K(*GuJmXayfl|]0QDivvNkT|0H&YI4aB6_8{@I3G5]9T?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'span_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

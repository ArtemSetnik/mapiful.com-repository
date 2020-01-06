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
define( 'DB_NAME', 'dedev2017_map' );

/** MySQL database username */
define( 'DB_USER', 'dedev2017_map' );

/** MySQL database password */
define( 'DB_PASSWORD', '6[Tp[3NSE6' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jvopqpr8q2nsh8q1cteasdtol39bfpeiweet3uhqarern6otcdhxlaahqtqhhrqm' );
define( 'SECURE_AUTH_KEY',  'kfuu7i1rbfsezdxrfhgvl4nqbrkawz7tw9xp9dyivzudqd6ernq7yt0xtouzdbep' );
define( 'LOGGED_IN_KEY',    '3abpikzultttovovapaqnnafhlkazali7ga4gjfy6cpckxespn48gphm5fig3aia' );
define( 'NONCE_KEY',        'ljffdlbm798unwqvrxi14tj4gfcphk5acbv5cflwoh29oajpoexxptllmoqska0t' );
define( 'AUTH_SALT',        '0y2hoi3maacudonl4w4yse7sxcc1grybtew3hx1wwcheyw6ugctjjipy6jagnye1' );
define( 'SECURE_AUTH_SALT', '3qwkrvwwcxz1qyw54l6bpaqgqu1vuevfm0ehxgjmdrz3dzds2qtkpmfenncnzio2' );
define( 'LOGGED_IN_SALT',   'oqvcglwfbeulfsjtbzu2z5irbyszmtp0uqurigijwnetwwsgahhe7ez2ytfsfca4' );
define( 'NONCE_SALT',       'pb5na5qdjdrqahoxuohzvcob0fturrfxicz5qugrj2xxu2kcwnv5hr0d8u9z0ubm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

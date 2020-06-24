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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C1G1DKmd6izWj4PtGXGuFmEv4YxrbETW/GJr52g8m2r/wcY3iqblZGxo0u/WhKCHsy4UDF2zRucis6PS/cCzew==');
define('SECURE_AUTH_KEY',  '0HVd1JAvy+az+svd/Z3M1MoF0UL3YIyey+Vu0F7L4dfavYC/Cda0HpoX4eupxb/6YABFHQQJAGYksXqqBxJMVA==');
define('LOGGED_IN_KEY',    'zXUAntrfGPsBmeTYi37spbEQlFhPeWb7Cjb3UfcyusnrcAX6E4Ml9OIdvyYc68l4t2N9fExDB0utKlPILmwi0g==');
define('NONCE_KEY',        '+2ezQEYz7MR6jvRh4p2bk4sJ/pHDG1ES4Rmk0lRfpO4NumanA1OgIzQOawVBo0c1flGcAvV1YsElY///4avoWw==');
define('AUTH_SALT',        '8tB12rrxPG6Gasp1NHgEx3QqVRoFhqE06rgEjzpQ9/gMjUckbjpd+Uc7U2G5l0aS4jDwd9rXPfQKC7rqpR2LBg==');
define('SECURE_AUTH_SALT', 'o0xfiuAK92/EK5oGu8DYxpJc1Ok27ADbO4/wRH7ZP782TJ4tO3hxiowLfv+JqAOn5KhieJsZ0uDY0IaLka/Qng==');
define('LOGGED_IN_SALT',   '6hl4ZCx4IQzFenpc2R+DT1a2SJbrHIbx01a8lxiVHBloZ2pgfB1IDlgImKhUjpuUs/VcVZJV2KahvQJB4NE2vg==');
define('NONCE_SALT',       'rHEImmRHBLvxby5Dj+tpPQv/hi8I5LCVWa06Xtwa2UhJeCmANOkzIpE3MIT2MgXHAY6zKNirO51gnV74WcJudg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

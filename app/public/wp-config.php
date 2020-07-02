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
define('AUTH_KEY',         'eGAVj+FvLj5Fr6P+YTnNnXf+L+rqNyjiJYPe9xn/4staxZM6ZHF7Z3jRSsLzpioBeAC36JqmBaGzwZfNGeUTBQ==');
define('SECURE_AUTH_KEY',  'j3Y6FlN+hCHk6o0ovbp7GC8Vus1yMlxU0/ePhdrgqj0i7SxdPD+FYW6x/H88fwt3DgU9ja1futrxeLhRRzOehQ==');
define('LOGGED_IN_KEY',    'NWT6t4qtHfB4+j/v2Bb7kQn4OGfFSZ7WTx/9MwOHrs3uNeHznNooBchHAMQrYlalVBihB0sswZHAyLugXUyy1Q==');
define('NONCE_KEY',        'xlbivqxJISzX7iY/K/LAjEMgeA2eSyGehEMxTeEhb/6DYoAw8lWNDSoNrn2tw1tvkvBBhs4kEAhpvUvVFSFt+g==');
define('AUTH_SALT',        'YFgXQZapD/KwVIyDf1pTaKVkjruWYqkhZv5Eg9w1wEcR0O573G5IRMHObeSVbXePTrj8lScUV4OOExVsY4mP1Q==');
define('SECURE_AUTH_SALT', 'G/igx0KXh9azxmtNy6hiWGFz09PByE2IdTOPE9wyEh1FAUHmfb9uglplCRAQMzgMABYt+UoD1oohMZYtHSF6DA==');
define('LOGGED_IN_SALT',   'UFu0xrVqJSeFZPxFaPgSxSuS56JaJcrQb9lMTSHGrP35Ea3U1M4pUScfhrk6KOqwyxjqgJ/V+lE1x2xSiy+cCQ==');
define('NONCE_SALT',       'aPOQi5T83LxeD+eJTAbAVgeLnBb4apY+QOFburW4PzWhhDTuBy63KJwQti3D7U5hWega78PabDou953+GPV1Cg==');

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

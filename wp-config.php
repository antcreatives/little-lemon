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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'little_lemon' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '?r7!$uFZ`{*vClu(Lw>hw?rD#Aeh]kdsQO P4}y9hdp&o@$Q/pp!{]${S!TgQ,w}' );
define( 'SECURE_AUTH_KEY',  'Xm*V3#mxNLVI(H_HNmIWY,H6f.?16$I/[!jyzN1&{9x*K:^>5Big!%%I<$kN`R8F' );
define( 'LOGGED_IN_KEY',    'frZCRRcSSwHoA=e]x5-N;l0.Pw}>Vh2_WlkR,@knoNsJu>9sttZ/=bMCGu`~l7<a' );
define( 'NONCE_KEY',        '.:-:KX>y.0W~ub,9D~Z#n3OD{0=@50lv~`MTvp}4+gh,j~}v6fV`&z<g^w]}dq{n' );
define( 'AUTH_SALT',        ';)j,T U|ONLwMFCHbm?/WfeNg+.4D~&R43m.R^<YHt~sb%}k#>b9Tf-e$iujH Q;' );
define( 'SECURE_AUTH_SALT', 'aZP106,B;x+.:9qC+jpnHqjZp3>,R]quXcVn@!]j9C^AAJbXTi8j>h^s$*xSEUg=' );
define( 'LOGGED_IN_SALT',   'w|#9[@/Kj8^66V1!_A~2Jxq]7JpjCjH&*>_3UJUNCpJuu8=K<Mze7^V{8_X|P76t' );
define( 'NONCE_SALT',       '|w=O2b+(c,MnX<<fXszCgX~li|?2Y@&clX~fc3}@KPG0ru#]FT_!)&mCbNcNn4{)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lls_';

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

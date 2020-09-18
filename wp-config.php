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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sanu@54321' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Vq6eKe;m_.`0M$]vvW>B%9Hu2qj86bnj][d_z),JtGQj=yh2vQq+,oWL1d(KD8E<');
define('SECURE_AUTH_KEY',  'Y?fB LCeG!8#$_* gE;hmW1F*cr7M+kO=Rx[N^!jVw<g==8Q}2hgGuq$KahPC1t|');
define('LOGGED_IN_KEY',    '@DH~|>8DBTfQ!eo<WEs~lH)> 93-Wg!T+p&/aEx-86X+HYRSK{XcnA,;^k15LmEt');
define('NONCE_KEY',        '`9`@-|X;R|)ej:W9-~L7$c1s8$H^-pfj..6z2q),>^aov^c-z([-mJcf30/jDg>_');
define('AUTH_SALT',        ',Sj{UbC]gXd*<{2Y6m5*{+v)}T>rTJu,Ifcm=J/ZMz4GiTCQa+Oheh+QSbO <<gc');
define('SECURE_AUTH_SALT', '|?^l B!j:$?Wr<a)A`d[rdS-gM*]q[ >p+Qq|IB7-|feg9+;xwU~/?%pIL:F]tF-');
define('LOGGED_IN_SALT',   'r<z-SvX[5hM)+Pa@66$%:m6^7e1M$-f3-!6 _EH Uy|;H)++3^yQ1h^Z%2.!0`rP');
define('NONCE_SALT',       'T7|`$hGh|+xRL&{ow|s*S|(+rVG)wy[iKR&&PYr&czM.T5(wSLmAMjXL^QuPDlGc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );




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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
